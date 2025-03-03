<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('comics');
})->name('comics');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/clown', function () {
    return view('clown');
})->name('clown');
