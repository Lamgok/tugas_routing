<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_kontak', function (Blueprint $table) {
            // id_kontak: int, PK, Not Null, Auto Increment
            $table->id('id_kontak'); 
            
            // nama_kontak: varchar(20), Not Null
            $table->string('nama_kontak', 20)->nullable(false); 
            
            // email: varchar(50), Not Null, tambahkan unique
            $table->string('email', 50)->unique()->nullable(false);
            
            // pesan: varchar(255), Not Null
            $table->string('pesan', 255)->nullable(false);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_kontak');
    }
};