<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $masukan = [
            [
                'id_masukan' => 1,
                'id_pengguna' => 2,
                'id_topik' => 1,
                'konten' => 'Saya merasa bahwa sistem remunerasi saat ini tidak adil karena...',
                'tujuan' => 1,
            ],
            [
                'id_masukan' => 2,
                'id_pengguna' => 3,
                'id_topik' => 1,
                'konten' => 'Pada pertemuan terakhir, kami membahas tentang masalah remunerasi yang belum terselesaikan...',
                'tujuan' => 1,
            ],
        ];

        // Masukkan data ke dalam tabel masukan
        DB::table('masukan')->insert($masukan);
    }
}
