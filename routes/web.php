<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

// Mahasiswa Routes
Route::resource('pasien', PasienController::class);

// Dosen Routes
Route::resource('obat', ObatController::class);

