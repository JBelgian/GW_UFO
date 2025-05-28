<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SightingController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\SubscriptionController;


Route::get('/', function () {
    return view('welcome');
});

// Home route
Route::get('/home', [SightingController::class, 'index'])->name('home');

// Sightings rapport routes
Route::get('/rapport', [SightingController::class, 'rapport']);
Route::post('sighting-post', [SightingController::class, 'sighting'])->name('sighting.post');

// About us route
Route::get('/about', function () {
    return view('about');
});

// Contact route
Route::get('/contact', function () {
    return view('contact');
});

// Profile route
Route::get('/profile', [SightingController::class, 'show'])->name('profile');

// Login routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

// Register routes
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

// Profile/Logout routes
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//patron subscription route
// ...existing routes

// Stripe webhook (no auth middleware!)
Route::post('/stripe/webhook', [\Laravel\Cashier\Http\Controllers\WebhookController::class, 'handleWebhook'])
    ->name('cashier.webhook');

// Group authenticated subscription routes
Route::middleware('auth')->group(function () {
    Route::get('/subscribe', [SubscriptionController::class, 'show'])->name('subscription.show');
    Route::post('/subscribe', [SubscriptionController::class, 'checkout'])->name('subscription.process');
    
    Route::get('/billing', function (Request $request) {
        return $request->user()->redirectToBillingPortal(route('profile'));
    })->name('billing.portal');
});