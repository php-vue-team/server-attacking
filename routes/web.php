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
Route::get('/sha2', [userController::class, 'xss'])->name('user#xss');
// http://localhost/my_projects/server-attacking/user_detail.php?id=13
// http://localhost/my_projects/server-attacking/user_detail.php?id=%3Cscript%3Ealert(%27die%27)%3Bwindow.location.href%3D%22https%3A%2F%2Fwww.istockphoto.com%2Fphotos%2Ffunny-dogs%22%3B%3C%2Fscript%3E
// https://www.google.com/search?
// https://meyerweb.com/eric/tools/dencoder/
// <script>window.location.href="https://dribbble.com/shots/11921173-Meditation-and-Healing-Music-App";</script>
// <script>window.location.href="http://127.0.0.1:8000/sha2";</script>

// csrf
Route::view('/order', 'order')->name('order#showOrderForm');
Route::post('/order/complete', [registerController::class, 'completeOrder'])->name('order#complete');

Route::post('/orderComplete', [registerController::class, 'order'])->name('orderComplete');
Route::view('/orderAttack', 'orderAttack')->name('csrf#orderAttack');
