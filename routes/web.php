<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/book', function () {
    return view('book');
});
