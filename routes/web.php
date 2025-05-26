<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Home route
Route::get('/home', function () {
    return view('home');
});

// About us route
Route::get('/about', function () {
    return view('about');
});

// Profile route
Route::get('/profile', function () {
    return view('profile');
});