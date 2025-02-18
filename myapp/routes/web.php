<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=> ''], function () {
     Route::get('/',[HomeController::class,'index'])->name('home.index');
    });
    
Route::group(['prefix'=> 'admin'], function () {
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::get('/category',[CategoryController::class,'index'])->name('categories.index');
});

