<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController;

// Route สำหรับหน้า Login & Register
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'create']);

// Route หน้า Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']); // สำรองกรณีใช้ `/home`

// Route สำหรับจัดการผู้ใช้ (User)
Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'edit']);
Route::put('/user/{id}', [UserController::class, 'edit_action']); // ปรับให้รองรับ `id`
Route::delete('/user/{id}', [UserController::class, 'delete']); // เพิ่ม `id` เพื่อระบุผู้ใช้

// Route Controller ทั่วไป
Route::get('/mycontroller/{id?}', [MyController::class, 'myfuntion']); // ลบ Route ที่ซ้ำออก

// Route สำหรับแบบฟอร์ม (Lab แม่สูตรคูณ)
Route::get('/LaravelForm', [LaravelFormController::class, 'showForm']);
Route::post('/LaravelForm', [LaravelFormController::class, 'showForm']); // ใช้เมธอดที่แตกต่างกันได้
