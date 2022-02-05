<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pak Guru',
            'role' => 'admin',
            'email' => 'admin@sma404.com',
            'password' => bcrypt('password')
        ]); 
        DB::table('users')->insert([
            'name' => 'Andi',
            'role' => 'siswa',
            'email' => 'andi@sma404.com',
            'password' => bcrypt('password')
        ]); 
        DB::table('users')->insert([
            'name' => 'budi',
            'role' => 'siswa',
            'email' => 'budi@sma404.com',
            'password' => bcrypt('password')
        ]); 
    }
}
