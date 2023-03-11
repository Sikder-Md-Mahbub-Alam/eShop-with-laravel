<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::get('/', [ProductsController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/cart', [CartController::class, 'store'])->name('cart');

Route::get('/checkout', [CartController::class, 'index'])->name('checkout');

Route::get('/checkout/get/items',[CartController::class, 'getCartItems']);

Route::post('/process/get/payment', [CartController::class, 'processPayment']);
