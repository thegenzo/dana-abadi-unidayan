<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('web.pages.home');
});

Route::get('/news', function () {
    return view('web.pages.news');
});

Route::get('/news/id', function () {
    return view('web.pages.news-detail');
});

Route::get('/endowment', function () {
    return view('web.pages.endowment');
});

Route::get('/cara-donasi', function () {
    return view('web.pages.how-to-donate');
});

Route::get('/donasi', function () {
    return view('web.pages.donate');
});