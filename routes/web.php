<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\AdminHomeController;

/*Route Admin*/
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('home');
Route::get('/admin/login', [AdminHomeController::class, 'admin_login'])->name('admin.login');
Route::get('/admin/forget-password', [AdminHomeController::class, 'forget_password'])->name('admin.forget.password');


Route::get('/', [HomeController::class, 'home']);

Route::get('/profile', [profileController::class, 'profile']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'contact']);


// Route::get('/home', [HomeController::class, 'viewHome'])->name('home');

// Route::get('/contact', [ContactController::class, 'viewContact'])->name('contact');

// Route::get('/about', [AboutController::class,'viewAbout'])->name('about');