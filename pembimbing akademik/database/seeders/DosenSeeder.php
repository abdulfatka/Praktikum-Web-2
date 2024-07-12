<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            [
                'nidn' => '0414047101',
                'nama' => 'Dr. Sirojul Munir, S.Si, M.Kom',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '1980-01-01',
                'jk' => 'L',
                'prodi_id' => 1
            ],
            [
                'nidn' => '410089103',
                'nama' => 'Tubagus Risky Dharmawan, S.T, M.Sc',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1980-02-02',
                'jk' => 'L',
                'prodi_id' => 1
            ],
            [
                'nidn' => '427057704',
                'nama' => 'Reza Primardiansyah, S.T, M.Kom',
                'tmp_lahir' => 'Banten',
                'tgl_lahir' => '1980-03-03',
                'jk' => 'L',
                'prodi_id' => 1
            ],
            [
                'nidn' => '0407129002',
                'nama' => 'Misna Asqia, S.Kom, M.Kom',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '1980-04-04',
                'jk' => 'P',
                'prodi_id' => 2
            ],
            [
                'nidn' => '402018701',
                'nama' => 'Dr. Amaliyah Rahmah, S.T, M.T',
                'tmp_lahir' => 'Depok',
                'tgl_lahir' => '1980-05-05',
                'jk' => 'P',
                'prodi_id' => 2
            ],
            [
                'nidn' => '0423076303',
                'nama' => 'Drs. Rusmanto, M.M.',
                'tmp_lahir' => 'Bekasi',
                'tgl_lahir' => '1980-06-06',
                'jk' => 'L',
                'prodi_id' => 2
            ],
            [
                'nidn' => '052305630',
                'nama' => 'Krisna Panji, S.Kom., M.M',
                'tmp_lahir' => 'Tanggerang',
                'tgl_lahir' => '1980-07-07',
                'jk' => 'L',
                'prodi_id' => 3
            ],
            [
                'nidn' => '033304490',
                'nama' => 'Tri Mukhlison Anugrah, S.E., M.M',
                'tmp_lahir' => 'Depok',
                'tgl_lahir' => '1980-08-08',
                'jk' => 'L',
                'prodi_id' => 3
            ],
            [
                'nidn' => '0921232330',
                'nama' => 'Betty Amalia, S.E., M.M',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '1980-11-11',
                'jk' => 'P',
                'prodi_id' => 3
            ],
        ]);

    }
}
