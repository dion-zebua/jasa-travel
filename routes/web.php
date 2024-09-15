<?php

use App\Http\Controllers\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'beranda'])
    ->name('beranda');
Route::get('/a', [LandingPageController::class, 'beranda'])
    ->name('rute-travel');
Route::get('/b', [LandingPageController::class, 'beranda'])
    ->name('tentang-kami');
