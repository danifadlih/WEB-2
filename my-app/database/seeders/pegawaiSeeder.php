<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            [
                'nip' => '1234567890',
                'nama' => 'John Doe',
                'unitkerjas_id' => 1,
            ],
            [
                'nip' => '0987654321',
                'nama' => 'Jane Smith',
                'unitkerjas_id' => 2,
            ],
            [
                'nip' => '1122334455',
                'nama' => 'Alice Johnson',
                'unitkerjas_id' => 3,
            ],
            [
                'nip' => '5566778899',
                'nama' => 'Bob Brown',
                'unitkerjas_id' => 4,
            ],
            [
                'nip' => '2233445566',
                'nama' => 'Charlie Davis',
                'unitkerjas_id'  => 5,
            ],
            [
                'nip' => '6677889900',
                'nama' => 'Diana Evans',
                'unitkerjas_id'  => 1,
            ],
            [
                'nip' => '3344556677',
                'nama' => 'Ethan Green',
                'unitkerjas_id'  => 2,
            ],
            [
                'nip' => '8899001122',
                'nama' => 'Fiona Harris',
                'unitkerjas_id' => 3,
            ],
            [
                'nip' => '4455667788',
                'nama' => 'George King',
                'unitkerjas_id'  => 4,
            ],
            [
                'nip' => '7788990011',
                'nama' => 'Hannah Lee',
                'unitkerjas_id'  => 5,
            ],
        ]);
    }
}
