<?php

use Illuminate\Support\Facades\Route;

// Guest-only (no logged-in user)
Route::middleware('guest')->group(function () {
    Route::view('/login', 'pages.auth.login-page')->name('login');
    Route::view('/register', 'pages.auth.register-page')->name('register-page');
});

// Authenticated-only (logged-in user required)
Route::middleware('auth')->group(function () {
    Route::view('/owner-register', 'pages.auth.owner-register-page')->name('owner-register-page');
});

// Public
Route::view('/', 'pages.welcome')->name('welcome');
