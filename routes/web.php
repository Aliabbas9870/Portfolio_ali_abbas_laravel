<?php

use App\Http\Controllers\frontend\contactcontroller;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\frontend\portfoliocontroller;
use App\Http\Controllers\frontend\resumecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/about', [homecontroller::class, 'index']);
Route::get('/', [homecontroller::class, 'index']);
Route::get('/resume', [resumecontroller::class, 'index']);
Route::get('/contact', [contactcontroller::class, 'index']);
Route::get('/contact', [contactcontroller::class, 'index']);
Route::get('/download-cv', [homecontroller::class, 'downloadCV'])->name('download.cv');
Route::post('/contact', [contactcontroller::class, 'store']);
// Route::get('/Contact', [Contactuscontroller::class, 'index']);
// Route::post('/Contact', [Contactuscontroller::class, 'store']);
Route::get('/work', [portfoliocontroller::class, 'index']);
