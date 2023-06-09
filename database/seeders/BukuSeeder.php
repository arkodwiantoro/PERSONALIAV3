<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('Bukus')->insert([
            'id' => '01',
            'judul' => 'holmy',
            'penulis' => 'conan doyle',
            'penerbit' => 'conan doyle',
            'tahun_terbit' => '2000',
            'jumlah_stok' => '12',
       ]);
    }
}
