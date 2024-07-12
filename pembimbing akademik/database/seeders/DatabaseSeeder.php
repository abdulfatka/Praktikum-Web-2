<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProdiSeeder::class,
            DosenSeeder::class,
            Rombongan_belajarSeeder::class,
            MahasiswaSeeder::class,
            UserSeeder::class,
            //Seeder yang lain tambahin
        ]);
    }
}
