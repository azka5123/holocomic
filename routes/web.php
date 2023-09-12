<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//admin login
Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_pass'])->name('admin_forget');
Route::post('/admin/forget-submit', [AdminLoginController::class, 'forget_submit'])->name('admin_forget_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_pass'])->name('admin_reset_pass');
Route::post('/admin/reset-submit', [AdminLoginController::class, 'reset_submit'])->name('admin_reset_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout')->middleware('admin:admin');


//admin User
route::middleware('admin:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminUserController::class, 'show_dashboard'])->name('admin_dashboard');
    Route::get('/admin/user/show', [AdminUserController::class, 'show_user'])->name('admin_user_show');
});
