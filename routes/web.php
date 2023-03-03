<?php

use Illuminate\Support\Facades\Route;
//  use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;

use App\Http\Controllers\Front\HomeController;


/*Route Front*/
Route::get('/', [HomeController::class, 'Home'])->name('home');


/*Route Admin*/
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'admin_login'])->name('admin.login');
Route::post('/admin/login-submit',[AdminLoginController::class, 'login_submit'] )->name('login.submit');
Route::get('/admin/logout',[AdminLoginController::class, 'logout'] )->name('admin.logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin.forget.password');
Route::post('/admin/forget-password-submit',[AdminLoginController::class, 'forget_password_submit'] )->name('admin.forget.password.submit');
Route::get('/admin/reset-password/{tokem}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin.reset.password');
Route::post('/admin/reset-password-submit',[AdminLoginController::class, 'reset_password_submit'] )->name('admin.reset.password.submit');

Route::get('/admin/edit-profile', [AdminProfileController::class, 'admin_profile'])->name('admin.edit.profile')->middleware('admin:admin');
Route::post('/admin/edit-profile-submit',[AdminProfileController::class, 'edit_profile_submit'] )->name('admin.edit.profile.submit');
