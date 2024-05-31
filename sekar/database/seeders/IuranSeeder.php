<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $iuran = [
            [
                'id_iuran' => '1',
                'iuran_wajib' => '25000',
                'iuran_sukarela' => '50000',
                'id_pengguna' => 2,
            ],
            [
                'id_iuran' => '2',
                'iuran_wajib' => '25000',
                'iuran_sukarela' => '30000',
                'id_pengguna' => 3,
            ],
            [
                'id_iuran' => '3',
                'iuran_wajib' => '25000',
                'iuran_sukarela' => '40000',
                'id_pengguna' => 4,
            ],
        ];

        // Masukkan data ke dalam tabel iuran
        DB::table('iuran')->insert($iuran);
    }
}
