<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ThumbnailController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
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

Route::controller(LandingPageController::class)->group(function () {

    Route::get('/', 'beranda')->name('beranda');

    Route::get('/arsip-travel', 'arsipTravel')->name('arsip-travel');
    Route::get('/arsip-agen', 'beranda')->name('arsip-agen');

    Route::get('/tentang-kami', 'beranda')->name('tentang-kami');

    Route::post('/', 'cariRute')->name('cari-rute');

    Route::prefix('/rute-travel/dari-{asal}/ke-{tujuan}/{asalId}/{tujuanId}')->group(function () {

        Route::get('/', 'jalurRuteTravel')->name('jalur-rute-travel');
        Route::get('/thumbnail.jpg', 'jalurRuteTravel')->name('thumbnail-jalur-rute-travel');
    });

    Route::prefix('/agen-travel-{asal}/{asalId}')->group(function () {
        Route::get('/', 'agenTravel')->name('agen-travel');
        Route::get('/thumbnail.jpg', 'agenTravel')->name('thumbnail-agen-travel');
    });
});
