<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function admin_login(){
        return view('admin.admin_login');
    }

    public function forget_password(){
        return view('admin.forget_password');
    }
}
