<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'administrator',
            ],
            [
                'name' => 'Dosen',
                'email' => 'dosen@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Mahasiswa',
                'email' => 'mahasiswa@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
            ],
        ]);
    }
}
