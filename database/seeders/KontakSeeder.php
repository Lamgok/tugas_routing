<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak; // Pastikan menggunakan Model Kontak Anda

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        Kontak::create([
            'nama_kontak' => 'Pengguna Awal',
            'email' => 'awal@demo.com',
            'pesan' => 'Data kontak dari proses seeding.',
        ]);
        
        Kontak::create([
            'nama_kontak' => 'Pengguna Tes',
            'email' => 'test@demo.com',
            'pesan' => 'Pesan kedua dari seeder.',
        ]);
    }
}