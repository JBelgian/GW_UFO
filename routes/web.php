<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SightingController;
use App\Http\Controllers\Auth\AuthController;

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
Route::get('/profile', [SightingController::class, 'show']);

// Login routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

// Register routes
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

// Profile/Logout routes
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');