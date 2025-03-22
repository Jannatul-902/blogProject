<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homepage']);




route::get('/home', [AdminController::class, 'index'])->name('home');


route::get('/home',[HomeController::class, 'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/profile', [HomeController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [HomeController::class, 'update'])->name('profile.update');
    Route::get('/profile', [HomeController::class, 'delete'])->name('profile.delete');
});


Route::get('/post_page', [AdminController::class, 'post_page']);

Route::post('/add_post', [AdminController::class, 'add_post']);

Route::get('/show_post', [AdminController::class, 'show_post']);
