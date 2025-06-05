<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.before-login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/Register', function () {
    return view("auth.Register");
})->name('Register');

Route::get('/Home', function () {
    return view("pages.after-login");
})->name('');


 