<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengguna = [
            [
                'id_pengguna' => 1,
                'nik' => '0000000',
                'nama' => 'Administrator',
                'no_telp' => '089876543',
                'password' => bcrypt('admin'), // Gunakan bcrypt() untuk mengenkripsi password
                'id_posisi' => 9,
                'flag' => 1,
            ],
            [
                'id_pengguna' => 2,
                'nik' => '2205449',
                'nama' => 'Mohammad Raihan Aulia Kamil',
                'no_telp' => '089876543',
                'password' => bcrypt('raihan'),
                'id_posisi' => 1,
                'flag' => 2,
            ],
            [
                'id_pengguna' => 3,
                'nik' => '2202046',
                'nama' => 'Nurainun',
                'no_telp' => '081234567',
                'password' => bcrypt('ainun'),
                'id_posisi' => 2,
                'flag' => 2,
            ],
            [
                'id_pengguna' => 4,
                'nik' => '2204509',
                'nama' => 'Muhamad Fahreza Fauzan',
                'no_telp' => '0821234567',
                'password' => bcrypt('fahreza'),
                'id_posisi' => 3,
                'flag' => 2,
            ],
            [
                'id_pengguna' => 5,
                'nik' => '2202495',
                'nama' => 'Raffi Ardhi Naufal',
                'no_telp' => '0821324654',
                'password' => bcrypt('raffi'),
                'id_posisi' => 4,
                'flag' => 2,
            ],
            [
                'id_pengguna' => 6,
                'nik' => '2207186',
                'nama' => 'Salma Ghaida',
                'no_telp' => '0821324654',
                'password' => bcrypt('salma'),
                'id_posisi' => 5,
                'flag' => 2,
            ],
        ];
    
        // Masukkan data ke dalam tabel pengguna
        DB::table('pengguna')->insert($pengguna);
    }
}
