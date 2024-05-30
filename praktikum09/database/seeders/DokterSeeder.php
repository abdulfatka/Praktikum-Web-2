<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Dr. John Doe',
                'gender' => 'L',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1980-05-15',
                'kategori' => 'Umum',
                'telpon' => '081234567890',
                'alamat' => 'Jakarta',
                'unit_kerja_id' => '2',
            ],
            [
                'nama' => 'Dr. Jane Doe',
                'gender' => 'P',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1975-10-20',
                'kategori' => 'Bedah',
                'telpon' => '082345678901',
                'alamat' => 'Surabaya',
                'unit_kerja_id' => '2',
            ],
            [
                'nama' => 'Dr. Michael Smith',
                'gender' => 'L',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1982-03-25',
                'kategori' => 'Bidan',
                'telpon' => '083456789012',
                'alamat' => 'Bandung',
                'unit_kerja_id' => '3',
            ],
            [
                'nama' => 'Dr. Sarah Johnson',
                'gender' => 'P',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1978-08-10',
                'kategori' => 'Ginekolog',
                'telpon' => '084567890123',
                'alamat' => 'Yogyakarta',
                'unit_kerja_id' => '4',
            ],
            [
                'nama' => 'Dr. Robert Brown',
                'gender' => 'L',
                'tmp_lahir' => 'Semarang',
                'tgl_lahir' => '1985-12-05',
                'kategori' => 'Anastesi',
                'telpon' => '085678901234',
                'alamat' => 'Semarang',
                'unit_kerja_id' => '5',
            ],
        ]);
    }
}
