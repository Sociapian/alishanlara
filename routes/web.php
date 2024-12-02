<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trending', function () {
    return view('trending');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/why-us', function () {
    return view('why-us');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/distributor', function () {
    return view('distributor');
});

Route::get('/contact', function () {
    return view('contact');
});