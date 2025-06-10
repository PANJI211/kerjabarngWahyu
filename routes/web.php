<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\special_menuController;

Route::middleware(['auth', 'check_role:admin'])->group(function(){

    Route::get('special_menus', [special_menuController::class, 'index'])->name('special_menus.index');
    Route::get('special_menus/create', [special_menuController::class, 'create'])->name('special_menus.create');
    Route::post('special_menus', [special_menuController::class, 'store'])->name('special_menus.store');
    Route::get('special_menus/{special_menu}/edit', [special_menuController::class, 'edit'])->name('special_menus.edit');
    Route::put('special_menus/{special_menu}', [special_menuController::class, 'update'])->name('special_menus.update');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/admin', fn () => 'halaman admin');

Route::get('/Home', function () {
    return view("pages.after-login");
})->name('home')->middleware(['auth','check_role:admin,user',]);



Route::get('/logout',[Authcontroller::class, 'logout']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'check_role:user'])->group(function(){
   Route::get('/verify',[VerificationController::class, 'index']);
   Route::post('/verify',[VerificationController::class, 'store']);
   Route::get('/verify/{unique_id}',[VerificationController::class, 'show']);
   Route::put('/verify/{unique_id}',[VerificationController::class, 'update']);
});
Route::middleware(['auth', 'check_role:user,admin', 'check_status'])->group(function(){
    
Route::get('/Home', function () {
    return view("pages.after-login");
})->name('home');
});

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