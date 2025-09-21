<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.welcome')->name('welcome');
Route::view('/owners/register', 'pages.auth.owner-register')->name('owner-register');
Route::view('/login', 'pages.auth.login-page')->name('login-page');
Route::view('/register', 'pages.auth.register-page')->name('register-page');
