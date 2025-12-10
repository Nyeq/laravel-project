<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('home');
})->name('home');

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Protected resume page
Route::get('/resume', function () {
    return view('resume');
})->middleware('auth')->name('resume');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
