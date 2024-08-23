<?php
#FrontendController
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
#BackendController
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BookingController as BackendBookingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GuidesController;
use App\Http\Controllers\Backend\ServiceController as BackendServiceController;
use App\Http\Controllers\Backend\PackageController as BackendPackageController;

#FrontendRouting
Route::get('/',[IndexController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/services',[ServiceController::class,'service']);

#BackendRouting
Route::get('/admin',[AdminController::class,'admin']);
Route::get('/booking',[BackendBookingController::class,'booking']);
Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::get('/guides',[GuidesController::class,'guides']);
Route::get('/package',[BackendPackageController::class,'package']);
Route::get('/service',[BackendServiceController::class,'service']);




