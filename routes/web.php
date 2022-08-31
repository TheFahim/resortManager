<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ResortController;
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

Route::get('/', [PublicController::class,'home'])->name('home');
Route::get('/booking', [PublicController::class,'booking'])->name('home.booking');
Route::post('/booking',[PublicController::class,'store'])->name('booking.store');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/create', [AdminController::class,'create'])->name('admin.create');
    Route::resource('resort',ResortController::class);
    Route::get('/admin/booking',[BookingController::class,'index'])->name('admin.booking');
    Route::delete('/booking/{booking}',[BookingController::class,'decline'])->name('booking.decline');
    Route::post('/booking/{booking}',[BookingController::class,'accept'])->name('booking.accept');
});

Route::get('/login', [AuthController::class,'login'])->name('login')->middleware('guest');


//create new user
Route::post('/users', [AdminController::class, 'store']);


// user login
Route::post('/login/authenticate', [AuthController::class,'authenticate']);

//user logout
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth');
