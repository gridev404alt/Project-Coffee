<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // Route untuk halaman landing page
    Route::get('/', [LandingController::class, 'home'])->name('home');
    Route::get('/about', [LandingController::class, 'about'])->name('about');
    Route::get('/menu', [LandingController::class, 'menu'])->name('menu');
    Route::get('/review', [LandingController::class, 'review'])->name('review');
    Route::get('/book', [LandingController::class, 'book'])->name('book');

    // Fallback halaman tidak tersedia
    Route::fallback([LandingController::class, 'notFound'])->name('notFound');
});