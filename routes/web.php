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
