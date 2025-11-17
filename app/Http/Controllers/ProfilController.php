<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman profil mahasiswa dengan data dummy.
     *
     * @return \Illuminate\View\View
     */
    public function showProfile()
    {
        // Data dummy profil mahasiswa (sebagai pengganti data dari database/Model).
        $data = [
            'nama'  => 'Lamgok Hando Siahaan',
            'nim'   => '11S23002',
            'prodi' => 'INFORMATIKA',
            'hobi'  => ['Coding', 'Bermain Musik', 'Membaca Buku'],
            'cita'  => 'Menjadi Full Stack Developer yang bermanfaat bagi banyak orang',
        ];
        return view('profile', compact('data'));
    }
}