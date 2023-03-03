<?php

use Illuminate\Support\Facades\Route;
//  use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Admin\AdminJobCategoryController;

use App\Http\Controllers\Front\HomeController;



/*Route Front*/
Route::get('/', [HomeController::class, 'Home'])->name('home');


/*Route Admin*/
Route::get('/admin/login', [AdminLoginController::class, 'admin_login'])->name('admin.login');
Route::post('/admin/login-submit',[AdminLoginController::class, 'login_submit'] )->name('login.submit');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin.forget.password');
Route::post('/admin/forget-password-submit',[AdminLoginController::class, 'forget_password_submit'] )->name('admin.forget.password.submit');
Route::get('/admin/reset-password/{tokem}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin.reset.password');
Route::post('/admin/reset-password-submit',[AdminLoginController::class, 'reset_password_submit'] )->name('admin.reset.password.submit');



Route::middleware(['admin:admin'])->group(function() {
    Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('/admin/edit-profile', [AdminProfileController::class, 'admin_profile'])->name('admin.edit.profile');
    Route::get('/admin/logout',[AdminLoginController::class, 'logout'] )->name('admin.logout');
    Route::post('/admin/edit-profile-submit',[AdminProfileController::class, 'edit_profile_submit'] )->name('admin.edit.profile.submit');
    Route::get('/admin/home-page', [AdminHomePageController::class, 'page_home'])->name('admin.home.page');
    Route::post('/admin/home-page/update', [AdminHomePageController::class, 'update'])->name('admin.home.page.update');
   
    Route::get('/admin/job-category/view', [AdminJobCategoryController::class, 'index'])->name('admin.job.category');
    Route::get('/admin/job-category/create', [AdminJobCategoryController::class, 'create'])->name('admin.job.category.create');
    Route::post('/admin/job-category/store', [AdminJobCategoryController::class, 'store'])->name('admin.job.category.store');
    Route::get('/admin/job-category/edit/{id}', [AdminJobCategoryController::class, 'edit'])->name('admin.job.category.edit');
    Route::post('/admin/job-category/update/{id}', [AdminJobCategoryController::class, 'update'])->name('admin.job.category.update');
    Route::get('/admin/job-category/delete/{id}', [AdminJobCategoryController::class, 'delete'])->name('admin.job.category.delete');

});