<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data yang ingin dimasukkan
        $wilayah = [
            [
                'lokasi_wilayah' => 'Bandung',
                'email_wilayah' => 'fahreza@gmail.com',
                'flag' => 1,
            ],
            [
                'lokasi_wilayah' => 'Jakarta',
                'email_wilayah' => 'salma@gmail.com',
                'flag' => 2,
            ],
            // Tambahkan data lainnya jika diperlukan
        ];

        // Masukkan data ke dalam tabel wilayah
        DB::table('wilayah')->insert($wilayah);
    }
}
