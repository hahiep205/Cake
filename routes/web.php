<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;

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

Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::get('login', [AuthController::class, 'login'])->name('auth.login');

Route::post('login', [AuthController::class, 'logined'])->name('auth.logined');

Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('register', [AuthController::class, 'register'])->name('auth.register');

Route::post('register', [AuthController::class, 'registered'])->name('auth.registered');

Route::get('profile', function () {
    return view('profile');})->name('profile')->middleware('auth');








