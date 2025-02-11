<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index() {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // ตรวจสอบข้อมูลผู้ใช้ในฐานข้อมูล
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // ถ้าผ่านการตรวจสอบให้เข้าสู่ระบบ
            User::login($user);

            // ลิงก์ไปที่หน้า home
            return redirect()->route('home');
        }

        // ถ้าไม่ผ่านการตรวจสอบ
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
}
