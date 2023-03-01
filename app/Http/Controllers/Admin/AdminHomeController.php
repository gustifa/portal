<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth;

class AdminHomeController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function admin_login(){
        $password = Hash::make('123456');
        dd($password);
        return view('admin.admin_login');
    }

    public function forget_password(){
        return view('admin.forget_password');
    }
}
