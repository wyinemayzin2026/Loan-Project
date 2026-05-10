<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // or 'index' depending on your filename
})->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Shop Page
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/history', function () {
    return view('history');
})->name('history');
