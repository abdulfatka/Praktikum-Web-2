<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Rombongan_belajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rombongan_belajars')->insert([
            [
                'kode' => 'TI01',
                'thn_masuk' => 2023,
                'dosen_pa' => '0414047101'
            ],
            [
                'kode' => 'TI02',
                'thn_masuk' => 2023,
                'dosen_pa' => '410089103'
            ],
            [
                'kode' => 'TI03',
                'thn_masuk' => 2023,
                'dosen_pa' => '427057704'
            ],
            [
                'kode' => 'SI01',
                'thn_masuk' => 2023,
                'dosen_pa' => '0407129002'
            ],
            [
                'kode' => 'SI02',
                'thn_masuk' => 2023,
                'dosen_pa' => '402018701'
            ],
            [
                'kode' => 'SI03',
                'thn_masuk' => 2023,
                'dosen_pa' => '0423076303'
            ],
            [
                'kode' => 'BD01',
                'thn_masuk' => 2023,
                'dosen_pa' => '052305630'
            ],
            [
                'kode' => 'BD02',
                'thn_masuk' => 2023,
                'dosen_pa' => '033304490'
            ],
            [
                'kode' => 'BD03',
                'thn_masuk' => 2023,
                'dosen_pa' => '0921232330'
            ],
        ]);

    }
}
