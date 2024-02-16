<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
use App\Http\Controllers\registerController;
use App\Http\Middleware\AuthMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// login
Route::view('/login', 'login')->name('user#showLoginForm');
Route::post('/login', [loginController::class, 'loginUser'])->name('user#login');
Route::post('/logout', [loginController::class, 'logoutUser'])->name('user#logout');

// user
Route::view('/user/register', 'register')->name('user#showRegistForm');
Route::post('/user/register', [userController::class, 'registUser'])->name('user#register');
Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/user/list', [userController::class, 'listUser'])->name('user#list');
    Route::get('/user/list/{id}', [userController::class, 'detailUser'])->name('user#detail');
});

// xss
Route::view('/xss', 'xss')->name('xss');

// csrf
Route::view('/order', 'order')->name('order#showOrderForm');
Route::post('/order/complete', [registerController::class, 'completeOrder'])->name('order#complete');

Route::post('/orderComplete', [registerController::class, 'order'])->name('orderComplete');
Route::view('/orderAttack', 'orderAttack')->name('csrf#orderAttack');
