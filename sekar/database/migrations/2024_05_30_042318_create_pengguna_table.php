<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->increments('id_pengguna');
            $table->string('nik', 10)->unique();
            $table->string('nama', 100);
            $table->string('no_telp', 11);
            $table->string('password', 255); // Anda mungkin ingin menggunakan Hash::make() saat menyimpan password
            $table->unsignedInteger('id_posisi');
            $table->foreign('id_posisi')->references('id_posisi')->on('posisi')->onDelete('cascade'); // Ubah 'posisi' sesuai dengan nama tabel posisi Anda
            $table->integer('flag');
            $table->timestamps(); // Otomatis membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
