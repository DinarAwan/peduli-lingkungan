<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'dinar',
            'email'=>'dinar@gmail.com',
            'password'=>Hash::make('dinar123')
        ]);
        DB::table('users')->insert([
            'name'=>'bimo',
            'email'=>'bimo@gmail.com',
            'password'=>Hash::make('bimo123')
        ]);
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('#admin123')
        ]);
    }
}
