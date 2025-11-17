<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak; // Import Model Kontak

class KontakController extends Controller
{
    // 1. Menampilkan Form Kontak
    public function showForm()
    {
        return view('kontak.form');
    }

    // 2. Memproses dan Menyimpan Data Kontak
    public function processForm(Request $request)
    {
        // Validasi Sisi Server (Wajib)
        $validatedData = $request->validate([
            'nama_kontak' => 'required|max:20',
            'email' => 'required|email|max:50',
            'pesan' => 'required|max:255',
        ]);
        
        // Keamanan Anti SQL Injection (d):
        // Eloquent ORM menggunakan prepared statements secara default,
        // sehingga input data dipisahkan dari query SQL, mencegah injeksi.
        Kontak::create($validatedData);

        return redirect()->route('kontak.form')
            ->with('success', 'Pesan Anda berhasil dikirim dan tersimpan dengan aman!');
    }
}