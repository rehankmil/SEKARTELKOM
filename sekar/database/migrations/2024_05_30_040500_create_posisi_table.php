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
        Schema::create('posisi', function (Blueprint $table) {
            $table->increments('id_posisi'); // Primary key, auto-incrementing
            $table->string('nama', 100); // Nama posisi dengan panjang maksimal 100 karakter
            $table->timestamps(); // Automatically add created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posisi');
    }
};
