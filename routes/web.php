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

Route::get('/{text}/{width}/{height}', [ThumbnailController::class, 'generateThumbnail']);


Route::controller(LandingPageController::class)->group(function () {

    Route::get('/', 'beranda')->name('beranda');

    Route::get('/arsip-travel', 'beranda')->name('arsip-travel');

    Route::get('/tentang-kami', 'beranda')->name('tentang-kami');

    Route::post('/', 'cariRute')->name('cari-rute');

    Route::get('/rute-travel/dari-{asal}/ke-{tujuan}/{asalId}/{tujuanId}', 'jalurRuteTravel')->name('jalur-rute-travel');

    Route::get('/agen-travel-{asal}/{asalId}', 'agenTravel')->name('agen-travel');
});
