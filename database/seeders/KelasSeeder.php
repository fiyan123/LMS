<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'angkatan' => 'XII',
            'jurusan_id' => 1,
            'nama_kelas' => '1'
        ]);
        Kelas::create([
            'angkatan' => 'XI',
            'jurusan_id' => 2,
            'nama_kelas' => '2'
        ]);
        Kelas::create([
            'angkatan' => 'X',
            'jurusan_id' => 3,
            'nama_kelas' => '3'
        ]);
    }
}
