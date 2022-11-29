<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;

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
Route::controller(LoginController::class)->group(function(){
     Route::get('/dashboard/login', 'index')->name('login')->middleware('guest');
     Route::post('/dashboard/login', 'authenticate');
});
Route::controller(RegisterController::class)->group(function(){
     Route::get('/dashboard/register', 'index')->name('register')->middleware('guest');
     Route::post('/dashboard/register', 'register');
});
Route::post('/dashboard/logout', [LogoutController::class, 'logout']);
Route::resource('/dashboard/book', BookController::class)->middleware('auth');
Route::resource('/', BookController::class)->middleware('auth');
Route::resource('/dashboard/category', CategoryController::class)->middleware('admin');
Route::resource('/dashboard/user', UserController::class)->middleware('admin');
Route::resource('/dashboard/transaction', TransactionController::class)->middleware('admin');
Route::get('/dashboard/history', HistoryController::class)->middleware('auth');