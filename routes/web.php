<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SightingController;

Route::get('/', function () {
    return view('welcome');
});

// Home route
Route::get('/home', [SightingController::class, 'index']);

// Sightings rapport route
Route::get('/rapport', [SightingController::class, 'rapport']);

// About us route
Route::get('/about', function () {
    return view('about');
});

// Contact route
Route::get('/contact', function () {
    return view('contact');
});

// Profile route
Route::get('/profile', function () {
    return view('profile');
});