<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/',[SesiController::class, 'masuk']);
});

Route::get('/home',function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class, 'admin']);
    Route::get('/admin/librarian',[AdminController::class, 'librarian']);
    Route::get('/logout',[SesiController::class, 'logout']);
});