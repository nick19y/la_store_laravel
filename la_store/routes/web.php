<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Authenticator;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('login');
})->name('login');


Route::middleware(Authenticator::class)->group(function(){
    Route::get('/main', [ProductController::class, 'index'])->name('main.index');
    Route::get('/register_product', function(){
        return view('/register_product');
    });
    Route::post('/product', [ProductController::class, 'create'])->name('product.create');
});


Route::get('/register_user', function () {
    return view('/register_user');
});
Route::controller(UserController::class)->group(function(){
    Route::get('/user', 'index')->name('user.index');
    Route::post('/user', 'create')->name('user.create');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('singin');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');