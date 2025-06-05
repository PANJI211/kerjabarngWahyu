<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('before-login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/Register', function () {
    return view("Register");
})->name('Register');

Route::get('/Home', function () {
    return view("after-login");
})->name('home');

 