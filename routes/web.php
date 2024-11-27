<?php


use App\Http\Controllers\CheckOutController;
use Illuminate\Support\Facades\Route;

Route::get("/", 'App\Http\Controllers\MainController@index')->name('home');
Route::get("/shop", 'App\Http\Controllers\ShopController@shop')->name('shop');
Route::get('/{categoriesGroup}/{category}/{product?}', 'App\Http\Controllers\ProductController@product')->name('product');

Route::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
Route::delete('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');
Route::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');


Route::get("/complete", 'App\Http\Controllers\CheckOutController@orderComplete')->name('complete');
Route::get('/checkout', 'App\Http\Controllers\CheckOutController@checkout')->name('checkout');

Route::post('/apply-coupon', 'App\Http\Controllers\CheckOutController@applyCoupon')->name('apply-coupon');

Route::post('/order/complete', 'App\Http\Controllers\CheckOutController@orderComplete')->name('order.complete');

Route::get('/about', 'App\Http\Controllers\MainController@about')->name('about');
Route::get('/contact', 'App\Http\Controllers\MainController@contact')->name('contact');



