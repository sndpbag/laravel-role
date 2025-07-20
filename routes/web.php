<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("users",UserController::class);
Route::resource("products",productController::class);
Route::resource("roles",roleController::class);