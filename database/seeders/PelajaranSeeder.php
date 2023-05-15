<?php

namespace Database\Seeders;

use App\Models\Pelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelajaran::create([
            'nama_pelajaran' => 'MTK'
        ]);
        Pelajaran::create([
            'nama_pelajaran' => 'INDONESIA'
        ]);
        Pelajaran::create([
            'nama_pelajaran' => 'B.INGGRIS'
        ]);
    }
}
