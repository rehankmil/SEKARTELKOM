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
        Schema::create('masukan', function (Blueprint $table) {
            $table->increments('id_masukan');
            $table->unsignedInteger('id_pengguna');
            $table->unsignedInteger('id_topik');
            $table->text('konten');
            $table->integer('tujuan');
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
            $table->foreign('id_topik')->references('id_topik')->on('topik')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masukan');
    }
};
