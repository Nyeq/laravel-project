<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::view('home','home');

