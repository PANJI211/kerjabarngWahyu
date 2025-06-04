<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('before-login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/Register', function () {
    return view("Register");
});

Route::get('/Home', function () {
    return view("after-login");
});


 