<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'nama' => 'RPL'
        ]);
        Jurusan::create([
            'nama' => 'TKR'
        ]);
        Jurusan::create([
            'nama' => 'TBSM'
        ]);
    }
}
