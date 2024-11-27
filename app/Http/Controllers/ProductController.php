<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($categoriesGroup, $category, $productSlug = null)
    {
        if ($productSlug) {
            $product = Product::where('slug', $productSlug)->firstOrFail();
        } else {
            $product = null;
        }


        $orderId = session('orderId');
        $order = null;
        $productsCount = 0;
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            $productsCount = $order->products()->count();
        }

        $products = Product::all();




        return view('product-detail', compact('product', 'productsCount', 'products'));
    }
}
