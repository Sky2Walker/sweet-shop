<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{

    public function basket()
    {
        $orderId = session('orderId');
        $order = null;
        $products = Product::all();

        if (!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }

        $productsCount = 0;
        $fullPrice = 0;

        if ($order) {
            $productsCount = $order->products()->count();
            $fullPrice = $order->getFullPrice();
        }

        return view('cart', compact('order', 'productsCount', 'fullPrice', 'products'));
    }


    public function basketAdd(Request $request, $productId)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            $order = Order::create();
            $orderId = $order->id;
            session(['orderId' => $orderId]);
        } else {
            $order = Order::findOrFail($orderId);
        }

        $quantity = $request->input('quantity', 1);

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count += $quantity;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId, ['count' => $quantity]);
        }


        $order->total = $order->getFullPrice();
        $order->save();

        return redirect('basket');
    }

    public function basketRemove($id)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            return redirect()->back()->with('error', 'Корзина пуста');
        }

        $order = Order::findOrFail($orderId);
        if ($order->products->contains($id)){
            $pivotRow = $order->products()->where('product_id', $id)->first()->pivot;
            if($pivotRow->count < 2 ){
                $order->products()->detach($id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }


        $order->total = $order->getFullPrice();
        $order->save();

        return redirect()->back()->with('success', 'Продукт успешно удален из корзины');
    }


}
