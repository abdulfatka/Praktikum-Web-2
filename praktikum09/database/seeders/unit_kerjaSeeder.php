<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class unit_kerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_kerjas')->insert([
            [               
                'nama' => 'Rumah Sakit Jakarta',             
            ],
            [               
                'nama' => 'Rumah Sakit Surabaya',             
            ],
            [               
                'nama' => 'Klinik Bandung',             
            ],
            [               
                'nama' => 'Puskesmas Yogyakarta',             
            ],
            [               
                'nama' => 'Rumah Sakit Semarang',             
            ],
        ]);
    }
}
