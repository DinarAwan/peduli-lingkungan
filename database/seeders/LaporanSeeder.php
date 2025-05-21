<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporan')->insert([
            'jenisSampah' => 'organik',
            'tanggal' => date('Y-m-d H:i:s'),
            'RT' => '02',
            'NamaJalan' => 'Jl.Mawar',
            'DefinisiLokasi' => 'Barat Masjid Al-Falaq',
            'created_at' => date('Y-m-d H:i:s'),
            'dusun' => 'sukamundur'
        ]);

        DB::table('laporan')->insert([
            'jenisSampah' => 'anorganik',
            'tanggal' => date('Y-m-d H:i:s'),
            'RT' => '02',
            'NamaJalan' => 'Jl.Manggis',
            'DefinisiLokasi' => 'Barat Masjid Al-Falaq, Gang kelelawar',
            'created_at' => date('Y-m-d H:i:s'),
            'dusun' => 'sukamaju'
        ]);
    }
}
