<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('pages.before-login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/Home', function () {
    return view("pages.after-login");
})->name('home');
});


Route::get('/logout',[Authcontroller::class, 'logout']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('guest')->group(function(){
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    
    // method post 
    Route::post('/login', [Authcontroller::class, 'login']);

    // regis
    Route::get('/Register', function () {
        return view("auth.Register");
    })->name('Register');
});