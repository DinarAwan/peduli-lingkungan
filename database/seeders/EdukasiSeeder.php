<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EdukasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('edukasi')->insert([
            'judul' => 'pentingnya memilah sampah',
            'isi' => 'sangat penting bagi kita untuk memilah sampah karen bisa mempercepat proses daur ulang'
        ]);

        DB::table('edukasi')->insert([
            'judul' => 'kenapa harus mengurangi plastik',
            'isi' => 'sangat penting bagi kita untuk memilah sampah karen bisa mempercepat proses daur ulang'
        ]);
    }
}
