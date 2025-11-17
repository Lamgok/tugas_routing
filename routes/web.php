<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('welcome'); 

Route::get('/profile', [ProfilController::class, 'showProfile']);

// Rute GET untuk menampilkan form (V)
Route::get('/kontak', [KontakController::class, 'showForm'])->name('kontak.form');

// Rute POST untuk memproses data (C)
Route::post('/kontak', [KontakController::class, 'processForm'])->name('kontak.process');
});
