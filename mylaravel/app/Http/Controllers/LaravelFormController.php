<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelFormController extends Controller
{
    public function showForm()
    {
        return view('LaravelForm');
    }
}
