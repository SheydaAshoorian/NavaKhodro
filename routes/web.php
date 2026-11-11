<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/buy', 'pages.buy')->name('buy');
Route::view('/sell', 'pages.sell')->name('sell');
Route::view('/about', 'pages.sell')->name('about');
Route::view('/blog', 'pages.sell')->name('blog');

Route::view('/nava_service', 'pages.nava_service')->name('nava_service');
Route::view('/service/part-search', 'pages.part-search')->name('part-search');
Route::view('/service/booking', 'pages.booking')->name('booking');
Route::view('/service/track-car', 'pages.track-car')->name('track-car');
Route::view('/service/track-order', 'pages.track-order')->name('track-order');
Route::view('/service/car-info', 'pages.car-info')->name('car-info');
Route::view('/service/complaints', 'pages.complaints')->name('complaints');
