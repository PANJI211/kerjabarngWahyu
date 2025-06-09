<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'check_role:admin'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/admin', fn () => 'halaman admin');

Route::get('/Home', function () {
    return view("pages.after-login");
})->name('home')->middleware(['auth','check_role:admin,user',]);


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
    Route::post('/Register', [AuthController::class, 'Register']);

    Route::get('/', function () {
        return view('pages.before-login');
    }); 
});