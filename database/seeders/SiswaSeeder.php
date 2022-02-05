<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => "Andi Jiee",
            'nis' => 121001,
            'tgl_lahir' => '2000-12-22'

        ]);
        DB::table('siswa')->insert([
            'nama' => "Budi Jiee",
            'nis' => 121002,
            'tgl_lahir' => '2000-11-11'

        ]);
    }
}
