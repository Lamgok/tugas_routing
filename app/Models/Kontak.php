<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    
    // Nama tabel sesuai dokumen: tbl_kontak
    protected $table = 'tbl_kontak'; 

    // Mendefinisikan Primary Key sesuai dokumen
    protected $primaryKey = 'id_kontak';

    // Kolom yang dapat diisi (untuk mass assignment)
    protected $fillable = [
        'nama_kontak',
        'email',
        'pesan',
    ];
}