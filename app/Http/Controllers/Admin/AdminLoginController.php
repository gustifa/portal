<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth;

class AdminLoginController extends Controller
{
    public function admin_login(){
        // $password = Hash::make('123456');
        // dd($password);
        return view('admin.admin_login');
    }

    public function forget_password(){
        return view('admin.forget_password');
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credential)){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->with('error', 'Informasi Not Valid');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
