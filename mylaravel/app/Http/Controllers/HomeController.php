<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    function index() {
        return view('home'); // ต้องมีไฟล์ home.blade.php
    }
}
