<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            [
                'id_role' => 1,
                'role' => 'anggota',
            ],
            [
                'id_role' => 2,
                'role' => 'admin',
            ],
            [
                'id_role' => 3,
                'role' => 'super_admin',
            ],
        ];
    
        // Masukkan data ke dalam tabel posisi
        DB::table('role')->insert($role);
    }
}
