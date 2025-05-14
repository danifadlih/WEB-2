<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class unitkerjasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unitkerjas')->insert([
            [
                'kode' => 'HRD',
                'nama' => 'Human Resource Development',
            ],
            [
                'kode' => 'IT',
                'nama' => 'Information Technology',
            ],
            [
                'kode' => 'FIN',
                'nama' => 'Finance',
            ],
            [
                'kode' => 'MKT',
                'nama' => 'Marketing',
            ],
            [
                'kode' => 'PRD',
                'nama' => 'Production',
            ]
        ]);
    }
}
