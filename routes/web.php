<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'IndexController', function () {
//     return view('index');
// });

Route::get('/', 'IndexController@index', function () {
    return view('index');
});

Route::get('/shop','ShopController@index', function () {
    return view('shop');
});

Route::get('/shop/{product}', 'ShopController@show',  function () {
    return view('shop.show');
});

Route::get('/cart', 'CartController@index',   function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});
