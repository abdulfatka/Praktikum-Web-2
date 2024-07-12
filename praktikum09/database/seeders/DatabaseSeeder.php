<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dokter;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            PasienSeeder::class,
            DokterSeeder::class,
            PeriksaSeeder::class,
            unit_kerjaSeeder::class,
            UserSeeder::class,
            //Seeder yang lain tambahin
        ]);
    }
}
