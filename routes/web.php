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

Route::get('/', function () {
    return view('index');})->name('index');

Route::get('dashboard', function () {
    return view('dashboard');})->name('dashboard')->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('auth.login');

Route::post('login', [AuthController::class, 'logined'])->name('auth.logined');

Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('register', [AuthController::class, 'register'])->name('auth.register');

Route::post('register', [AuthController::class, 'registered'])->name('auth.registered');








