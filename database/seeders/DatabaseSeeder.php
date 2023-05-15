<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\KelasSeeder;
use Database\Seeders\JurusanSeeder;
use Database\Seeders\PelajaranSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(PelajaranSeeder::class);
    }
}
