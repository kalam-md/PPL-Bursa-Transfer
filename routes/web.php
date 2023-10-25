<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Team\TeamController;
use App\Http\Controllers\Performansi\PerformansiController;
use App\Http\Controllers\Buser\BursaTransferController;
use App\Http\Controllers\Notifikasi\NotifikasiController;

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

// Autentikasi
Route::redirect('/', '/login');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Beranda
Route::get('/beranda', function () {
    return view('index');
})->middleware('role')->name('beranda');

// Profile
Route::prefix('/profile')->middleware('role')->group(function () {
    // dashboard admin
    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
});

// Team
Route::resource('/team', TeamController::class);

// Performansi
Route::resource('/performansi', PerformansiController::class);

// Buser
Route::prefix('/bursa-transfer')->middleware('role')->group(function () {
    // dashboard admin
    Route::get('/', [BursaTransferController::class, 'index'])->name('buser.index');
});

// Notif
Route::prefix('/notifikasi')->middleware('role')->group(function () {
    // dashboard admin
    Route::get('/', [NotifikasiController::class, 'index'])->name('notif.index');
});
