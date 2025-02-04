<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [LoginRegisterController::class,'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class,'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class,'login'])->name('login');
    Route::post('/authenticate', [LoginRegisterController::class,'authenticate'])->name('authenticate');
});

Route::middleware('auth','admin')->group(function () {
    Route::get('admin/dashboard',[AdminController::class, 'index'])->name('admin/dashboard');
    Route::post('/logout',[AdminController::class, 'logout'])->name('logout');
});

