<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

// หน้าแรก -> ไปที่ home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Dashboard หรือหน้าหลัก
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

// หน้าล็อกอิน
Route::get('/login', [LoginController::class, 'index'])->name('login');

// หน้าสมัครสมาชิก
Route::get('/register', [RegisterController::class, 'index'])->name('register');

// สูตรคูณ
Route::get('/multiplication', [MyController::class, 'back']);
Route::post('/multiplication', [MyController::class, 'multiplication']);

// ระบบ Auth ของ Laravel (login, logout, register)
Auth::routes();
