<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function()
{
    Session::forget('user');
    return redirect('login');
});

Route::post('/logincontroller', [UserController::class,'login']);
Route::get('/', [ProductController::class,'productpage']);
Route::get('detail/{id}',[ProductController::class, 'detailPage']);
Route::get("search", [ProductController::class, 'search']);
Route::post("add_to_cart", [ProductController::class, 'addToCart']);
Route::get("cartList", [ProductController::class, 'cartList']);