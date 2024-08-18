<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\DestinationController;
use App\Http\Controllers\Frontend\PackageController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\TestimonialController;

Route::get('/',[IndexController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/services',[ServiceController::class,'service']);


