<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;


Route::get('/login',
    [LoginController::class, 'index']);

Route::get('/register',
    [RegisterController::class, 'index']);

Route::get('/home',
    [HomeController::class, 'index']);

Route::get('/',
    [HomeController::class, 'index']);


Route::get('/', function () {
    return view('home');
});

Route::post('/register',
    [RegisterController::class, 'create']);


Route::get('/users',
    [UserController::class, 'index']);

Route::get('/user/{id}',
    [UserController::class, 'edit']);

Route::put('/user',
    [UserController::class, 'edit_action']);

Route::delete('/user',
    [UserController::class, 'delete']);



/*
Route::get('/hello', function () {
    return "<h1>Hello, World!</h1>";
});
*/

/*
Route::get('/Christmas', function () {
    return "<h1>Merry Christmas , Santa claus HOHO !!!!🦌🎅🎄❄️☃️🎁</h1>";
});
*/

/* ตัวอย่างจากอาจารย์ ไม่ได้ถูกสร้าง */
Route::get('/mycontroller/{id?}',
    [MyController::class, 'myfuntion']);

Route::get('/mycontroller/{id?}',
    [MyController::class, 'myfuntion']);

/* สำหรับ lab แม่สูตรคูณ  */
Route::get('/LaravelForm',
    [LaravelFormController::class, 'showForm']);

Route::post('/LaravelForm',
    [LaravelFormController::class, 'showForm']);


