<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/buy', 'pages.buy')->name('buy');
Route::view('/sell', 'pages.sell')->name('sell');
Route::view('/about', 'pages.sell')->name('about');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/checkout', 'pages.checkout')->name('checkout');
Route::view('/payment', 'pages.payment')->name('payment');
Route::view('/invoice', 'pages.invoice')->name('invoice');
Route::view('/cart', 'pages.cart')->name('cart');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/about', 'pages.about')->name('about');
Route::view('/employment', 'pages.employment')->name('employment');
Route::view('/complaints', 'pages.complaints')->name('complaints');
Route::view('/subscribe', 'pages.subscribe')->name('subscribe');


Route::view('/nava_service', 'pages.nava_service')->name('nava_service');
Route::view('/service/part-search', 'pages.part-search')->name('part-search');
Route::view('/service/booking', 'pages.booking')->name('booking');
Route::view('/service/track-car', 'pages.track-car')->name('track-car');
Route::view('/service/track-order', 'pages.track-order')->name('track-order');
Route::view('/service/car-info', 'pages.car-info')->name('car-info');
Route::view('/service/complaints', 'pages.complaints')->name('complaints');
Route::view('/service/shop', 'pages.shop')->name('shop');
Route::view('/service/repair', 'pages.repair')->name('repair');
Route::view('/accessories', 'pages.accessories')->name('accessories');
Route::view('/service/tools', 'pages.tools')->name('tools');
Route::view('/service/oils', 'pages.oils')->name('oils');
Route::view('/service/product', 'pages.product-detail')->name('product-detail');
Route::view('/service/booking', 'pages.booking')->name('booking');
