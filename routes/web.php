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
// Define route get tới /, gọi func dashboard trong AuthController để hiển thị trang chủ, đặt tên route

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
// Define route get tới /dashboard, gọi func dashboard trong AuthController để hiển thị dashboard.

Route::get('cart', [AuthController::class, 'cart'])->name('cart'); 
// Define route get tới cart, gọi func cart trong AuthController để hiển thị giỏ hàng.

Route::get('login', [AuthController::class, 'login'])->name('auth.login'); 
// Define route get tới login, gọi func login trong AuthController để hiển thị form đăng nhập.

Route::post('login', [AuthController::class, 'logined'])->name('auth.logined'); 
// Define route post tới login, gọi func logined trong AuthController để xử lý đăng nhập.

Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth'); 
// Define route get tới logout, gọi func logout trong AuthController để xử lý đăng xuất, chỉ cho vào khi đã login.

Route::get('register', [AuthController::class, 'register'])->name('auth.register'); 
// Define route get tới register, gọi func register trong AuthController để hiển thị form đăng ký.

Route::post('register', [AuthController::class, 'registered'])->name('auth.registered'); 
// Define route post tới register, gọi func registered trong AuthController để xử lý đăng ký.

Route::get('profile', function () {
    return view('profile');})->name('profile')->middleware('auth'); 
// Define route get tới profile, trả về view profile, yêu cầu login.

Route::get('profile_edit', function () {
    return view('profile_edit');})->name('profile_edit')->middleware('auth'); 
// Define route get tới profile_edit, trả về view profile_edit, đặt tên route, phải login mới vào đc.

// Chỉ login rồi mới vào được.
Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    // Define route get tới profile, gọi func profile trong AuthController để hiển thị profile.

    Route::put('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');
    // Define route put tới /profile/update, gọi func updateProfile trong AuthController để update profile.
});

Route::get('admin', [AuthController::class, 'admin'])->name('admin'); 
// Define route get tới admin, gọi func admin trong AuthController để hiển thị trang admin.








