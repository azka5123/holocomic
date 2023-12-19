<?php

use App\Http\Controllers\Admin\AdminKatsubController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\User\DashboardController;
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
// homepage
Route::get('/', [DashboardController::class, 'show'])->name('index');
Route::get('/detail', [DashboardController::class, 'detail'])->name('detail');
Route::get('/upload', [DashboardController::class, 'upload'])->name('upload');


//admin login
Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_pass'])->name('admin_forget');
Route::post('/admin/forget-submit', [AdminLoginController::class, 'forget_submit'])->name('admin_forget_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_pass'])->name('admin_reset_pass');
Route::post('/admin/reset-submit', [AdminLoginController::class, 'reset_submit'])->name('admin_reset_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout')->middleware('admin:admin');

//admin User
// Route::middleware('admin:admin')->group(function () {
Route::get('/admin/dashboard', [AdminUserController::class, 'show_dashboard'])->name('admin_dashboard');
Route::get('/admin/user/show', [AdminUserController::class, 'show_user'])->name('admin_user_show');
Route::get('/admin/user/delete/{id}', [AdminUserController::class, 'delete'])->name('admin_user_delete');
// });

//admin Post
// Route::middleware('admin:admin')->group(function () {
Route::get('/admin/post/show', [AdminPostController::class, 'show'])->name('admin_post_show');
Route::get('/admin/post/create', [AdminPostController::class, 'create'])->name('admin_post_create');
Route::post('/admin/post/store', [AdminPostController::class, 'store'])->name('admin_post_store');
Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin_post_edit');
Route::post('/admin/post/update/{id}', [AdminPostController::class, 'update'])->name('admin_post_update');
Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin_post_delete');
// });

//admin kategori dan sub kategori
Route::middleware('admin:admin')->group(function () {
    Route::get('/admin/katsub/show', [AdminKatsubController::class, 'show'])->name('admin_katsub_show');
    Route::post('/admin/katsub/store/kategori', [AdminKatsubController::class, 'store_kategori'])->name('admin_katsub_kategori_store');
    Route::get('/admin/katsub/edit/kategori/{id}', [AdminKatsubController::class, 'edit_kategori'])->name('admin_katsub_kategori_edit');
    Route::post('/admin/katsub/update/kategori/{id}', [AdminKatsubController::class, 'update_kategori'])->name('admin_katsub_kategori_update');
    Route::get('/admin/katsub/delete/kategori/{id}', [AdminKatsubController::class, 'delete_kategori'])->name('admin_katsub_kategori_delete');
    Route::post('/admin/katsub/store/sub-kategori', [AdminKatsubController::class, 'store_sub_kategori'])->name('admin_sub_kategori_store');
    Route::get('/admin/katsub/edit/sub-kategori/{id}', [AdminKatsubController::class, 'edit_sub_kategori'])->name('admin_katsub_sub_kategori_edit');
    Route::post('/admin/katsub/update/sub-kategori/{id}', [AdminKatsubController::class, 'update_sub_kategori'])->name('admin_katsub_sub_kategori_update');
    Route::get('/admin/katsub/delete/sub-kategori/{id}', [AdminKatsubController::class, 'delete_sub_kategori'])->name('admin_katsub_sub_kategori_delete');
});
