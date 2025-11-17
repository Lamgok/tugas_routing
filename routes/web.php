<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;

// Pastikan Anda telah mengimpor ProfilController dan KontakController

Route::get('/profile', [ProfilController::class, 'showProfile']);

// Rute GET untuk menampilkan form (Ketentuan b)
Route::get('/kontak', [KontakController::class, 'showForm'])->name('kontak.form');

// Rute POST untuk memproses data (Ketentuan b)
Route::post('/kontak', [KontakController::class, 'processForm'])->name('kontak.process');

// Tidak ada kurung kurawal penutup di sini!