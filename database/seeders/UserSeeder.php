<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'Guru',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2
        ]);
        User::create([
            'name' => 'Haddad Hikmah M',
            'kelas_id'=>1,
            'pelajaran_id'=>1,
            'nomor_telpon'=>'0943843493',
            'email' => 'haddad@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 2
        ]);
        User::create([
            'name' => 'Siswa',
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'Siswa1',
            'email' => 'siswa1@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'Siswa2',
            'email' => 'siswa2@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'Siswa3',
            'email' => 'siswa3@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'Siswa4',
            'email' => 'siswa4@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'Siswa5',
            'email' => 'siswa5@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'Siswa6',
            'email' => 'siswa6@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'Siswa7',
            'email' => 'siswa7@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'Siswa8',
            'email' => 'siswa8@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'Siswa9',
            'email' => 'siswa9@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'Siswa10',
            'email' => 'siswa10@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
        

    }
}
