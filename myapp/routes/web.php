<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertiseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Models\Advertise;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=> ''], function () {
     Route::get('/',[HomeController::class,'index'])->name('home.index');
    });
    
Route::group(['prefix'=> 'admin'], function () {
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    //category
    Route::get('/category',[CategoryController::class,'index'])->name('categories.index');
    Route::get('/category/create',[CategoryController::class,'create'])->name('categories.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('categories.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    //advertise
    Route::get('/advertise',[AdvertiseController::class,'index'])->name('advertise.index');
    Route::get('/advertise/create',[AdvertiseController::class,'create'])->name('advertise.create');
    Route::post('/advertise/store', [AdvertiseController::class,'store']) -> name('advertise.store');
    Route::get('/advertise/{advertise}/edit', [AdvertiseController::class,'edit']) -> name('advertise.edit');
    Route::put('/advertise/{id}', [AdvertiseController::class,'update']) -> name('advertise.update');
    Route::delete('/advertise/{advertise}', [AdvertiseController::class,'destroy']) -> name('advertise.destroy');
    //comment
    Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
    Route::get('/comment/create', [CommentController::class, 'create'])->name('comment.create');
    Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/comment/{comment}/edit', [CommentController::class, 'edit'])->name('comment.edit');
    Route::put('/comment/{id}', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('/comment/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
    // news
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
});

