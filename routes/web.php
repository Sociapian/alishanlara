<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;
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

Route::get('/superba', function () {
    return view('superba');
});

Route::get('/aroma-traditional', function () {
    return view('aroma-traditional');
});

Route::get('/delight', function () {
    return view('delight-indian');
});

Route::get('/brown-rice', function () {
    return view('brown');
});

Route::get('/xlindian', function () {
    return view('xlsella');
});

Route::get('/daily-long-grain', function () {
    return view('long-grain');
});

Route::post('/submit-query', [QueryController::class, 'store'])->name('submit.query');
