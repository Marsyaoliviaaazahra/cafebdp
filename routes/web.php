<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order', function () {
    return view('menu');
});

Route::get('/cart2', function () {
    return view('cart');
});

Route::get('/product', [UserController::class, 'index']);
Route::get('cart', [UserController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [UserController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [UserController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [UserController::class, 'remove'])->name('remove_from_cart');

Route::post('/checkout',[CartOrderController::class,'checkout'])->name('checkout');