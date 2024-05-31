<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topik = [
            [
                'id_topik' => 1,
                'nama_topik' => 'Remunerasi',
                'kategori' => 0,
            ],
            [
                'id_topik' => 2,
                'nama_topik' => 'Hubungan Atasan/Bawahan',
                'kategori' => 0,
            ],
            [
                'id_topik' => 3,
                'nama_topik' => 'Disiplin Karyawan',
                'kategori' => 0,
            ],
            [
                'id_topik' => 4,
                'nama_topik' => 'Organisasi SEKAR',
                'kategori' => 1,
            ],
            [
                'id_topik' => 5,
                'nama_topik' => 'Strategi/Operasional Perusahaan',
                'kategori' => 1,
            ],
            [
                'id_topik' => 6,
                'nama_topik' => 'Materi PKB',
                'kategori' => 1,
            ],
        ];
    
        // Masukkan data ke dalam tabel topik
        DB::table('topik')->insert($topik);
    }
}
