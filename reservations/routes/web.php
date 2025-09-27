<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUserIsOwner;

// Guest-only (no logged-in user)
Route::middleware('guest')->group(function () {
    Route::view('/login', 'pages.auth.login-page')->name('login');
    Route::view('/register', 'pages.auth.register-page')->name('register-page');
});

// Authenticated-only (logged-in user required)
Route::middleware('auth')->group(function () {
    Route::view('/owner-register', 'pages.auth.owner-register-page')->name('owner-register-page');
    Route::post('/logout', function (Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    })->name('logout');
});

Route::view('/owner-dashboard', 'pages.owner-dashboard')->name('owner-dashboard')->middleware(EnsureUserIsOwner::class);

// Public
Route::view('/', 'pages.welcome')->name('welcome');
