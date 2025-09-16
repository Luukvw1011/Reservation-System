<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.welcome')->name('welcome');
Route::view('/owners/register', 'pages.owner-register')->name('owner-register');
