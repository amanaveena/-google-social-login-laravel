<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Googlecontroller;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/google', [App\Http\Controllers\Googlecontroller::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [App\Http\Controllers\Googlecontroller::class, 'handleGoogleCallback'])->name('auth.google.callback');
