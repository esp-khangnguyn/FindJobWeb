<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [
    HomeController::class,
    'index'
])->name('home');

Route::get('/search',[
    SearchController::class,
    'search'
])->name('search');

Route::post('/register', [
    AccountController::class,
    'store'
])->name('register');

Route::post('/login', [
    AccountController::class,
    'login'
])->name('login');

Route::get('/logout', [
    AccountController::class,
    'logout'
])->name('logout');