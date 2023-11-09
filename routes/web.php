<?php

use App\Http\Controllers\Web\WebController;
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

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('web.home');
    Route::get('/dana-abadi', 'endowment')->name('web.endowment');
    Route::get('/berita', 'news')->name('web.news');
    Route::get('/berita/{id}', 'news_detail')->name('web.news-detail');
    Route::get('/cara-donasi', 'how_to_donate')->name('web.how-to-donate');
    Route::get('/donasi', 'donate')->name('web.donate');
});