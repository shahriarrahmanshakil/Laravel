<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/create', [ProductsController::class, 'create'])->name('product.create');
// Route::post('product/store', [ProductsController::class, 'store'])->name('product.store');
Route::post('/product/store', [ProductsController::class, 'store'])->name('product.store');
