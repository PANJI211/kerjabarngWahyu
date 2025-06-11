<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\special_menuController;
use App\Http\Controllers\categoryController;

Route::middleware(['auth', 'check_role:admin'])->group(function(){

    Route::get('special_menus', [special_menuController::class, 'index'])->name('special_menus.index');
    Route::get('special_menus/create', [special_menuController::class, 'create'])->name('special_menus.create');
    Route::post('special_menus', [special_menuController::class, 'store'])->name('special_menus.store');
    Route::get('special_menus/{special_menu}/edit', [special_menuController::class, 'edit'])->name('special_menus.edit');
    Route::put('special_menus/{special_menu}', [special_menuController::class, 'update'])->name('special_menus.update');
    Route::delete('special_menus/{special_menu}', [special_menuController::class, 'destroy'])->name('special_menus.destroy');

    Route::get('categories', [categoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [categoryController::class, 'create'])->name('categories.create');
    Route::post('categories', [categoryController::class, 'store'])->name('categories.store');
    Route::get('categories/{category}/edit', [categoryController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{category}', [categoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [categoryController::class, 'destroy'])->name('categories.destroy');

    Route::get('admins', [adminController::class, 'index'])->name('admins.index');
    Route::get('admins/create', [adminController::class, 'create'])->name('admins.create');
    Route::post('admins', [adminController::class, 'store'])->name('admins.store');
    Route::get('admins/{admin}/edit', [adminController::class, 'edit'])->name('admins.edit');
    Route::put('admins/{admin}', [adminController::class, 'update'])->name('admins.update');
    Route::delete('admins/{admin}', [adminController::class, 'destroy'])->name('admins.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::get('/Home', function () {
    return view("pages.after-login");
})->name('home')->middleware(['auth','check_role:admin,user',]);

Route::get('/', [LandingController::class, 'beforeLogin'])->name('before.login');
Route::get('/Home', [LandingController::class, 'afterLogin'])->middleware('auth')->name('after.login');


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