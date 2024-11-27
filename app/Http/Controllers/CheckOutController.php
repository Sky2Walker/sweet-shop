<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class CheckOutController extends Controller
{
    public function checkout()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $orderId = session('orderId');
        $order = null;
        $fullPrice = 0;
        $productsCount = 0;
        $products = Product::all();

        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $fullPrice = $order->getFullPrice();
        }

        if ($order) {
            $productsCount = $order->products()->count();

        }

        if (is_null($productsCount)){
            $productsCount = 0;
        }



        $line_items = [];
        foreach ($order->products as $product) {
            $line_items[] = [
                'price_data' => [
                    'currency' => 'uah',
                    'product_data' => [
                        'name' => $product->name,
                    ],
                    'unit_amount' => $product->price * 100,
                ],
                'quantity' => $product->pivot->count,
            ];
        }

        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $line_items,
            'mode' => 'payment',
            'success_url' => route('complete'),
            'cancel_url' => route('checkout'),




        ]);



        return view('checkout', compact('order', 'fullPrice','productsCount', 'products','checkout_session'));
    }

    public function complete(){
        return view('order-complete');
    }

    public function orderComplete(Request $request)

    {


        $requestData = $request->only(['surname', 'name', 'adress', 'town', 'oblast', 'postalcode', 'email', 'phone']);


        $orderId = session('orderId');


        $orderCompleted = false;


        if ($orderId) {

            $order = Order::findOrFail($orderId);





            $order->update($requestData);


            $totalPrice = $order->getFullPrice();
            $order->status = 1;
            $order->total = $totalPrice;
            $order->save();



            session()->forget('orderId');


            $orderCompleted = true;
        }

        if ($orderCompleted) {
            return redirect()->route('complete');
        }



        return view('order-complete');
    }



    public function applyCoupon(Request $request)
    {
        $couponCode = $request->input('coupon_code');
        $coupon = Coupon::where('code', $couponCode)->where('expired', '>', now())->first();

        if ($coupon) {

            $discount = $coupon->discountInPercent;
            $orderId = session('orderId');
            $order = Order::findOrFail($orderId);


            if (!$order->coupon) {
                $order->coupon()->associate($coupon);
                $order->save();
            }


            $fullPrice = $order->getFullPrice();
            $discountAmount = $fullPrice * ($discount / 100);
            $totalAfterDiscount = $fullPrice - $discountAmount;

            $order->total = $totalAfterDiscount;
            $order->save();



            return redirect()->back()->with('success', 'Купон успешно применен.');
        }

        return redirect()->back()->with('error', 'Неверный или устаревший купон.');
    }




}
