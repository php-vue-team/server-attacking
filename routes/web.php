<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'login')->name('user#showLoginForm');
Route::post('/login', [loginController::class, 'loginUser'])->name('user#login');

Route::view('/user/register', 'register')->name('user#showRegistForm');
Route::post('/user/register', [userController::class, 'registUser'])->name('user#register');
Route::get('/user/list', [userController::class, 'listUser'])->name('user#list');
