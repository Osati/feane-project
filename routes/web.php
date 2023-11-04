<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;




Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/menu',[HomeController::class,'menu'])->name('menu');
Route::get('/book',[HomeController::class,'book'])->name('book');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});
