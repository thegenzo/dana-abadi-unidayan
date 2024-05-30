<?php

use App\Http\Controllers\AllotmentController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\WorkUnitController;
use Illuminate\Support\Facades\Artisan;
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
    return view('welcome');
});

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('web.home');
    Route::get('/dana-abadi', 'endowment')->name('web.endowment');
    Route::get('/berita', 'news')->name('web.news');
    Route::get('/berita/{id}', 'news_detail')->name('web.news-detail');
    Route::get('/cara-donasi', 'how_to_donate')->name('web.how-to-donate');
    Route::get('/donasi', 'donate')->name('web.donate');
    Route::post('/donasi', 'donation')->name('web.donation');
    Route::get('/donasi/success/{id}', 'donationSuccess')->name('web.donation-success')->middleware('check.donation.status');
    Route::put('/donasi/success/{id}', 'uploadDonationReceipt')->name('web.upload-donation-receipt');
});

Route::middleware('auth')->group(function () {

    Route::group(['prefix' => 'admin-panel'], function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-panel.dashboard');
        Route::get('/get-monthly-donations', [DashboardController::class, 'getMonthlyDonations'])->name('admin-panel.get-monthly-donations');

        Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
            Route::resource('user', UserController::class, ['as' => 'admin-panel']);
        });

        // Route::resource('faculties', FacultyController::class, ['as'=> 'admin-panel']);
        // Route::resource('work-units', WorkUnitController::class, ['as'=> 'admin-panel']);
        // Route::resource('allotments', AllotmentController::class, ['as' => 'admin-panel']);
        Route::resource('banks', BankController::class, ['as' => 'admin-panel']);
        Route::resource('news', NewsController::class, ['as' => 'admin-panel']);

        Route::controller(PageController::class)->group(function () {
            Route::get('/endowment', 'endowment')->name('admin-panel.endowment');
            Route::get('/how-to-donate', 'how_to_donate')->name('admin-panel.how-to-donate');
            Route::put('/page/update/{id}', 'update')->name('admin-panel.page.update');
        });

        Route::controller(DonationController::class)->group(function () {
            Route::get('/donations', 'index')->name('admin-panel.donations.index');
            Route::get('/donations/{id}', 'show')->name('admin-panel.donations.show');
            Route::put('/donations/{id}/confirm', 'confirmDonation')->name('admin-panel.donations.confirm-donation');
        });
    });
});

// Dev Routes
Route::get('/run-artisan-migrate', function () {
    Artisan::call('migrate');
});
Route::get('/run-storage-link', function () {
    Artisan::call('storage:link');
});


require __DIR__.'/auth.php';
