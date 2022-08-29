<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth')->group(function(){
    Route::get('/admin', [DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/create',[AdminController::class,'create'])->name('admin.create');
    Route::resource('resort',ResortController::class);
});

Route::get('/login', [AuthController::class,'login'])->name('login')->middleware('guest');


//create new user
Route::post('/users', [AdminController::class, 'store']);


// user login
Route::post('/login/authenticate', [AuthController::class,'authenticate']);

//user logout
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth');
