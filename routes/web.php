<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.before-login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// method post 
Route::post('/login', [Authcontroller::class, 'login']);

Route::get('/Register', function () {
    return view("auth.Register");
})->name('Register');

Route::get('/Home', function () {
    return view("pages.after-login");
})->name('');


Route::get('/dashboard', function () {
    return view("pages.dashboard");
})->name('dashboard');



 