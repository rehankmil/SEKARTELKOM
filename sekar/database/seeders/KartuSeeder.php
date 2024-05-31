<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KartuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kartu = [
            [
                'id_kartu' => 1,
                'nas_kartu' => '2205449',
                'id_pengguna' => 2,
            ],
        ];

        // Masukkan data ke dalam tabel pengguna
        DB::table('kartu')->insert($kartu);
    }
}
