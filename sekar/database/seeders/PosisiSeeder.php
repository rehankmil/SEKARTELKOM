<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posisi = [
            [
                'id_posisi' => 1,
                'nama' => 'CEO',
            ],
            [
                'id_posisi' => 2,
                'nama' => 'Vice President',
            ],
            [
                'id_posisi' => 3,
                'nama' => 'Senior Executive',
            ],
            [
                'id_posisi' => 4,
                'nama' => 'Senior Advisor',
            ],
            [
                'id_posisi' => 5,
                'nama' => 'Senior Director',
            ],
            [
                'id_posisi' => 6,
                'nama' => 'Regional Manager',
            ],
            [
                'id_posisi' => 7,
                'nama' => 'Project Manager',
            ],
            [
                'id_posisi' => 8,
                'nama' => 'Marketing Supervisor',
            ],
            [
                'id_posisi' => 9,
                'nama' => 'Staff Administrasi',
            ],
            [
                'id_posisi' => 10,
                'nama' => 'Staff Marketing',
            ],
        ];
    
        // Masukkan data ke dalam tabel posisi
        DB::table('posisi')->insert($posisi);
    }
}
