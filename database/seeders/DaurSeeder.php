<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DaurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('daur')->insert([
            'nama'=>'Bagong',
            'judul'=>'Plastik',
            'deskripsi'=>'Dengan mengolah plastik menjadi produk lain kita bisa memperpanjang umur bumi',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('daur')->insert([
            'nama'=>'Andik',
            'judul'=>'organik ke kompos',
            'deskripsi'=>'Dengan mengolah sampah oraganik menjadi pupuk kompos bia menghemat dan menyuburkan tanah',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('daur')->insert([
            'nama'=>'MasDinar',
            'judul'=>'Bungkus Kopi',
            'deskripsi'=>'Dengan mengolah plastik bungkus kopi menjadi barang yang berguna kita biasa menyelamatkan bumi',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('daur')->insert([
            'nama'=>'Bimo',
            'judul'=>'Kulit Pisang',
            'deskripsi'=>'Dengan mengolah kulit pisang menjadi pakan ternak',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
