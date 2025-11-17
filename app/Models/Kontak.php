<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    
    // Konfigurasi agar Eloquent menggunakan tabel dan primary key yang benar
    protected $table = 'tbl_kontak';
    protected $primaryKey = 'id_kontak';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_kontak',
        'email',
        'pesan',
    ];
}