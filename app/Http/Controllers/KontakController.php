<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak; 

class KontakController extends Controller
{
    // Menampilkan form (Ketentuan b)
    public function showForm()
    {
        // Pastikan nama view sesuai: 'kontak.form'
        return view('kontak.form');
    }

    // Memproses data (Ketentuan b, d)
    public function processForm(Request $request)
    {
        // 1. Validasi Sisi Server
        $validatedData = $request->validate([
            'nama_kontak' => 'required|max:20',
            'email' => 'required|email|max:50',
            'pesan' => 'required|max:255',
        ]);
        
        // 2. Penyimpanan Data (Anti SQL Injection)
        // Eloquent ORM (Kontak::create) secara default aman dari SQL Injection.
        Kontak::create($validatedData);

        return redirect()->route('kontak.form')
            ->with('success', 'Pesan Anda berhasil dikirim dan tersimpan dengan aman!');
    }
}