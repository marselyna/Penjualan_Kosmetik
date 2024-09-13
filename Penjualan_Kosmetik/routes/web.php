<?php

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');
Route::get('/add_to_cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::get('/cart', [ProductController::class, 'cart'])->name('cart');