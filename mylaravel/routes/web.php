<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\ProductController;


Route::get('/product', [ProductController::class, 'index'])->middleware([CheckLogin::class]);
Route::post('/product', [ProductController::class, 'add_product'])->middleware([CheckLogin::class]);

Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'edit']);
    Route::put('/user', [UserController::class, 'edit_action']);
    Route::delete('/user', [UserController::class, 'delete']);
});

Route::get('/',
    [HomeController::class, 'index'])->middleware([CheckLogin::class]);

Route::get('/login',
    [LoginController::class, 'index']);
Route::post('/login',
    [LoginController::class, 'login']);

Route::get('/logout',function(){
    session()->forget('user');
    session()->flush();
    return redirect('/login');
});


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



;


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


