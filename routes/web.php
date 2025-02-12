<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::view('/privacy-policy', 'privacy-policy')->name('privacy-policy');
Route::view('/cookies-policy', 'cookies-policy')->name('cookies-policy');
Route::view('/careers', 'careers')->name('careers');
Route::view('/product-results', 'product-results')->name('product-results');
Route::view('/industrii', 'industrii')->name('industrii');