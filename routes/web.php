<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;

/*Route Admin*/
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'admin_login'])->name('admin.login');
Route::post('/admin/login-submit',[AdminLoginController::class, 'login_submit'] )->name('login.submit');
Route::get('/admin/logout',[AdminLoginController::class, 'logout'] )->name('admin.logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password_submit'])->name('admin.forget.password');


Route::get('/', [HomeController::class, 'home']);

Route::get('/profile', [profileController::class, 'profile']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'contact']);


// Route::get('/home', [HomeController::class, 'viewHome'])->name('home');

// Route::get('/contact', [ContactController::class, 'viewContact'])->name('contact');

// Route::get('/about', [AboutController::class,'viewAbout'])->name('about');