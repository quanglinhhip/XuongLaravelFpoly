<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Route::get('auth/showFormLogin', [LoginController::class, 'showFormLogin'])->name('auth.showFormLogin');
Route::post('auth/login',        [LoginController::class, 'login'])->name('auth.login');
Route::post('auth/logout',       [LoginController::class, 'logout'])->name('auth.logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
