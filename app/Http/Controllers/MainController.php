<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $orderId = session('orderId');
        $order = null;
        $productsCount = 0;
        $products = Product::all();

        if (!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }
        if ($order) {
            $productsCount = $order->products()->count();

        }

        if (is_null($productsCount)){
            $productsCount = 0;
        }

        return view('index', compact('productsCount', 'products'));
    }

    public function about(){
        $orderId = session('orderId');
        $order = null;
        $productsCount = 0;


        if (!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }
        if ($order) {
            $productsCount = $order->products()->count();

        }

        if (is_null($productsCount)){
            $productsCount = 0;
        }
        return view('about', compact('productsCount'));
    }

    public function contact(){

        $orderId = session('orderId');
        $order = null;
        $productsCount = 0;


        if (!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }
        if ($order) {
            $productsCount = $order->products()->count();

        }

        if (is_null($productsCount)){
            $productsCount = 0;
        }
        return view('contact' , compact('productsCount'));
    }
}
