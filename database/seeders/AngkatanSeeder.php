<?php

namespace Database\Seeders;

use App\Models\Angkatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Angkatan::create([
            'angkatan' => 'X',
        ]);
        Angkatan::create([
            'angkatan' => 'XI',
        ]);
        Angkatan::create([
            'angkatan' => 'XII',
        ]);
    }
}
