<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdvertiseController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ConfixController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


// Trang đăng nhập Admin (Không yêu cầu đăng nhập)
Route::get('/admin/login', [AdminController::class, 'login'])->name('login');
Route::post('/admin/login', [AdminController::class, 'check_login']);
// Trang đăng ký Admin (Không yêu cầu đăng nhập)
Route::get('/admin/register', [AdminController::class, 'register'])->name('register');
Route::post('/admin/register', [AdminController::class, 'check_register']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    //category
    Route::get('/category', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    // news
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
    //advertise
    Route::get('/advertise', [AdvertiseController::class, 'index'])->name('advertise.index');
    Route::get('/advertise/create', [AdvertiseController::class, 'create'])->name('advertise.create');
    Route::post('/advertise/store', [AdvertiseController::class, 'store'])->name('advertise.store');
    Route::get('/advertise/{advertise}/edit', [AdvertiseController::class, 'edit'])->name('advertise.edit');
    Route::put('/advertise/{id}', [AdvertiseController::class, 'update'])->name('advertise.update');
    Route::delete('/advertise/{advertise}', [AdvertiseController::class, 'destroy'])->name('advertise.destroy');
    //comment
    Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
    Route::get('/comment/create', [CommentController::class, 'create'])->name('comment.create');
    Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/comment/{comment}/edit', [CommentController::class, 'edit'])->name('comment.edit');
    Route::put('/comment/{id}', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('/comment/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
    // config
    Route::get('/config/edit', [ConfixController::class, 'edit'])->name('config.edit');
    Route::put('/config/update', [ConfixController::class, 'update'])->name('config.update');
    // user
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/admin/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    // banner
    Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');   
    Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/banner/{banner}/edit', [BannerController::class, 'edit'])->name('banner.edit');
    Route::put('/banner/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('/banner/{banner}', [BannerController::class, 'destroy'])->name('banner.destroy');
});