<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get    ( '/product',                   [ProductController::class, 'index'  ]) ->name( 'products.index'  );
Route::get    ( '/product/create',            [ProductController::class, 'create' ]) ->name( 'products.name'   );
Route::post   ( '/product',                   [ProductController::class, 'store'  ]) ->name( 'products.store'  );
Route::get    ( '/product/{product}/edit',    [ProductController::class, 'edit'   ]) ->name( 'products.edit'   );
Route::put    ( '/product/{product}/update',  [ProductController::class, 'update' ]) ->name( 'products.update' );
Route::delete ( '/product/{product}/destroy', [ProductController::class, 'destroy']) ->name( 'products.destroy');




