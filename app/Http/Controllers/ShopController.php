<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        $categories = Category::with('group')->distinct()->get();
        $products = Product::paginate(15);
        $orderId = session('orderId');


        $order = null;
        $productsCount = 0;

        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $productsCount = $order->products()->count();
        }

        return view('shop', compact('categories', 'products', 'order', 'productsCount'));
    }
}
