<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak; // Import Model

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        Kontak::create([
            'nama_kontak' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'pesan' => 'Ini adalah pesan kontak pertama untuk demo.',
        ]);
        
        Kontak::create([
            'nama_kontak' => 'Ani Wijaya',
            'email' => 'ani@example.com',
            'pesan' => 'Pesan dari kontak kedua.',
        ]);
    }
}