<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing.check-status');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/home.dashboard', [LoginController::class, 'index'])->name('home.dashboard')->middleware('auth');
    // Route::get('/home.pelanggan', [HomeController::class, 'view_pelanggan'])->name('home.pelanggan')->middleware('auth');
    Route::get('/home.proses-servis', [HomeController::class, 'view_proses'])->name('home.proses-servis')->middleware('auth');
    Route::get('/home.bisa-diambil', [HomeController::class, 'view_ambil'])->name('home.bisa-diambil')->middleware('auth');
    Route::get('/home.sudah-diambil', [HomeController::class, 'view_sudahambil'])->name('home.sudah-diambil')->middleware('auth');
    Route::get('/home.terima-servis', [HomeController::class, 'view_terima'])->name('home.terima-servis')->middleware('auth');
    Route::get('/home.report', [HomeController::class, 'view_report'])->name('home.report')->middleware('auth');
    Route::get('/register', [LoginController::class, 'register'])->name('register');

    Route::resource('pelanggan', PelangganController::class);
});

Route::get('/register', [LoginController::class, 'register'])->name('register');
// Route::get('/redirects', 'App\Http\Controllers\LoginController@index')->middleware('auth');