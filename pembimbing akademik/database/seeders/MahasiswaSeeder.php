<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nim' => '0110223001',
                'nama' => 'MUHAMAD NUR FAUZI',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1995-02-12',
                'ipk' => 3.5,
                'prodi_id' => 1,
                'rombel_id' => 1
            ],
            [
                'nim' => '0110223002',
                'nama' => 'BIMA IKHSAN ANDI',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1996-08-25',
                'ipk' => 3.2,
                'prodi_id' => 1,
                'rombel_id' => 1
            ],
            [
                'nim' => '0110223003',
                'nama' => 'MUHAMMAD WILDAN ZIYAD ALFARABI',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1997-03-15',
                'ipk' => 3.8,
                'prodi_id' => 1,
                'rombel_id' => 1
            ],
            [
                'nim' => '0110223004',
                'nama' => 'MUHAMMAD SHAHIFAH HAMMAMI',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1995-11-20',
                'ipk' => 3.1,
                'prodi_id' => 1,
                'rombel_id' => 1
            ],
            [
                'nim' => '0110223007',
                'nama' => 'MUHAMMAD ASYAM AL FARISI',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '1996-05-01',
                'ipk' => 3.6,
                'prodi_id' => 1,
                'rombel_id' => 1
            ],
            [
                'nim' => '0110223010',
                'nama' => 'ROBY MULIA',
                'tmp_lahir' => 'Palembang',
                'tgl_lahir' => '1997-09-10',
                'ipk' => 3.4,
                'prodi_id' => 1,
                'rombel_id' => 1
            ],
            [
                'nim' => '0110223012',
                'nama' => 'KAFFAH RIZAL',
                'tmp_lahir' => 'Semarang',
                'tgl_lahir' => '1995-06-18',
                'ipk' => 3.3,
                'prodi_id' => 1,
                'rombel_id' => 1
            ],
            [
                'nim' => '0110223013',
                'nama' => 'RYANDRA ATHAYA SALEH',
                'tmp_lahir' => 'Makassar',
                'tgl_lahir' => '1996-01-05',
                'ipk' => 3.9,
                'prodi_id' => 1,
                'rombel_id' => 1
            ],
            [
                'nim' => '0110223014',
                'nama' => 'FIRENZE HIGA PUTRA',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '1997-04-22',
                'ipk' => 3.7,
                'prodi_id' => 1,
                'rombel_id' => 1
            ],
            [
                'nim' => '0110223019',
                'nama' => 'SHAFHAN FARIZI',
                'tmp_lahir' => 'Cirebon',
                'tgl_lahir' => '1995-10-15',
                'ipk' => 3.0,
                'prodi_id' => 1,
                'rombel_id' => 1
            ],
            [
                'nim' => '0110223020',
                'nama' => 'MUHAMMAD ARIS NAUFAL',
                'tmp_lahir' => 'Solo',
                'tgl_lahir' => '1996-07-28',
                'ipk' => 3.6,
                'prodi_id' => 1,
                'rombel_id' => 2
            ],
            [
                'nim' => '0110223022',
                'nama' => 'KEMAL FAZANI',
                'tmp_lahir' => 'Malang',
                'tgl_lahir' => '1997-02-01',
                'ipk' => 3.5,
                'prodi_id' => 1,
                'rombel_id' => 2
            ],
            [
                'nim' => '0110223024',
                'nama' => 'RANO ALAMSYAH',
                'tmp_lahir' => 'Tasikmalaya',
                'tgl_lahir' => '1995-08-20',
                'ipk' => 3.2,
                'prodi_id' => 1,
                'rombel_id' => 2
            ],
            [
                'nim' => '0110223026',
                'nama' => 'MUHAMMAD YUKING NIQOBAL HAQQI',
                'tmp_lahir' => 'Pekanbaru',
                'tgl_lahir' => '1996-03-12',
                'ipk' => 3.8,
                'prodi_id' => 1,
                'rombel_id' => 2
            ],
            [
                'nim' => '0110223028',
                'nama' => 'AMARA RUKHSYAH',
                'tmp_lahir' => 'Pontianak',
                'tgl_lahir' => '1997-11-25',
                'ipk' => 3.4,
                'prodi_id' => 1,
                'rombel_id' => 2
            ],
            [
                'nim' => '0110223030',
                'nama' => 'MUHAMMAD MIKAIL MUSA',
                'tmp_lahir' => 'Banjarmasin',
                'tgl_lahir' => '1995-05-15',
                'ipk' => 3.1,
                'prodi_id' => 1,
                'rombel_id' => 2
            ],
            [
                'nim' => '0110223032',
                'nama' => 'MUHAMMAD AMIR AL-AQWA',
                'tmp_lahir' => 'Jayapura',
                'tgl_lahir' => '1996-09-18',
                'ipk' => 3.6,
                'prodi_id' => 1,
                'rombel_id' => 2
            ],
            [
                'nim' => '0110223036',
                'nama' => 'GALANG SAPUTRA',
                'tmp_lahir' => 'Ambon',
                'tgl_lahir' => '1995-12-25',
                'ipk' => 3.5,
                'prodi_id' => 1,
                'rombel_id' => 2
            ],
            [
                'nim' => '0110223038',
                'nama' => 'FADLAN ZAKI AHMADANI',
                'tmp_lahir' => 'Ternate',
                'tgl_lahir' => '1996-06-12',
                'ipk' => 3.2,
                'prodi_id' => 1,
                'rombel_id' => 2
            ],
            [
                'nim' => '0110223039',
                'nama' => 'SATRIA TRI FERDIANSYAH',
                'tmp_lahir' => 'Manokwari',
                'tgl_lahir' => '1997-01-10',
                'ipk' => 3.8,
                'prodi_id' => 1,
                'rombel_id' => 2
            ],
            [
                'nim' => '0110223040',
                'nama' => 'FAHDAN ZULFA ALSAUQI',
                'tmp_lahir' =>'Mataram',
                'tgl_lahir' => '1995-04-20',
                'ipk' => 3.4,
                'prodi_id' => 1,
                'rombel_id' => 3
            ],
            [
                'nim' => '0110223043',
                'nama' => 'ARRIJAL ABDUL KHOLIK',
                'tmp_lahir' => 'Kupang',
                'tgl_lahir' => '1996-10-12',
                'ipk' => 3.1,
                'prodi_id' => 1,
                'rombel_id' => 3
            ],
            [
                'nim' => '0110223044',
                'nama' => 'ARYA SASTRA DIGYA',
                'tmp_lahir' => 'Sorong',
                'tgl_lahir' => '1997-07-15',
                'ipk' => 3.7,
                'prodi_id' => 1,
                'rombel_id' => 3
            ],
            [
                'nim' => '0110223045',
                'nama' => 'NICKY FAJAELANI',
                'tmp_lahir' => 'Merauke',
                'tgl_lahir' => '1995-02-25',
                'ipk' => 3.3,
                'prodi_id' => 1,
                'rombel_id' => 3
            ],
            [
                'nim' => '0110223046',
                'nama' => 'M.RIZAL FAUZI',
                'tmp_lahir' => 'Bima',
                'tgl_lahir' => '1996-01-10',
                'ipk' => 3.6,
                'prodi_id' => 1,
                'rombel_id' => 3
            ],
            [
                'nim' => '0110223047',
                'nama' => 'MIFTAH ADZ DZAUDAN ISLAM',
                'tmp_lahir' => 'Banjarmasin',
                'tgl_lahir' => '1997-09-25',
                'ipk' => 3.9,
                'prodi_id' => 1,
                'rombel_id' => 3
            ],
            [
                'nim' => '0110223048',
                'nama' => 'SITI ROHIMAH',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1995-06-05',
                'ipk' => 3.2,
                'prodi_id' => 1,
                'rombel_id' => 3
            ],
            [
                'nim' => '0110223049',
                'nama' => 'MUHAMMAD FAHMI ROMADHON',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1996-11-20',
                'ipk' => 3.8,
                'prodi_id' => 1,
                'rombel_id' => 3
            ],
            [
                'nim' => '0110223050',
                'nama' => 'RAKA MUHAMMAD RABBBANI',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1997-03-05',
                'ipk' => 3.5,
                'prodi_id' => 1,
                'rombel_id' => 3
            ],
            [
                'nim' => '0110223051',
                'nama' => 'NANDA ILHAM FADLIKA',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1995-04-20',
                'ipk' => 3.4,
                'prodi_id' => 1,
                'rombel_id' => 3
            ],
            [
                'nim' => '0110123066',
                'nama' => 'NINDA NUR\'AINI',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1995-02-12',
                'ipk' => 3.5,
                'prodi_id' => 2,
                'rombel_id' => 4
            ],
            [
                'nim' => '0110123150',
                'nama' => 'SHINTA NUR ALLYANI',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1996-08-25',
                'ipk' => 3.2,
                'prodi_id' => 2,
                'rombel_id' => 4
            ],
            [
                'nim' => '0110123110',
                'nama' => 'SITI IRMAWATI',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1997-03-15',
                'ipk' => 3.8,
                'prodi_id' => 2,
                'rombel_id' => 4
            ],
            [
                'nim' => '0110123048',
                'nama' => 'SITI FATIMAH',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1995-11-20',
                'ipk' => 3.1,
                'prodi_id' => 2,
                'rombel_id' => 4
            ],
            [
                'nim' => '0110123139',
                'nama' => 'SALSABILA PUTRI',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '1996-05-01',
                'ipk' => 3.6,
                'prodi_id' => 2,
                'rombel_id' => 4
            ],
            [
                'nim' => '0110123089',
                'nama' => 'ISHDA ILAHIA',
                'tmp_lahir' => 'Palembang',
                'tgl_lahir' => '1997-09-10',
                'ipk' => 3.4,
                'prodi_id' => 2,
                'rombel_id' => 4
            ],
            [
                'nim' => '0110123230',
                'nama' => 'SINDYI YANI',
                'tmp_lahir' => 'Semarang',
                'tgl_lahir' => '1995-06-18',
                'ipk' => 3.3,
                'prodi_id' => 2,
                'rombel_id' => 4
            ],
            [
                'nim' => '0110123247',
                'nama' => 'RISFADILLA DWI WULANDARI',
                'tmp_lahir' => 'Makassar',
                'tgl_lahir' => '1996-01-05',
                'ipk' => 3.9,
                'prodi_id' => 2,
                'rombel_id' => 4
            ],
            [
                'nim' => '0110123070',
                'nama' => 'MUHAMMAD DAFIN GARNIDA',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '1997-04-22',
                'ipk' => 3.7,
                'prodi_id' => 2,
                'rombel_id' => 4
            ],
            [
                'nim' => '0110123179',
                'nama' => 'MUHAMMAD RANDYA KURNIAWAN',
                'tmp_lahir' => 'Cirebon',
                'tgl_lahir' => '1995-10-15',
                'ipk' => 3.0,
                'prodi_id' => 2,
                'rombel_id' => 4
            ],
            [
                'nim' => '0110123233',
                'nama' => 'DWI MUTIA AFIFAH',
                'tmp_lahir' => 'Solo',
                'tgl_lahir' => '1996-07-28',
                'ipk' => 3.6,
                'prodi_id' => 2,
                'rombel_id' => 5
            ],
            [
                'nim' => '0110123310',
                'nama' => 'PUTRI LUTFYAH HUMMAIRAH',
                'tmp_lahir' => 'Malang',
                'tgl_lahir' => '1997-02-01',
                'ipk' => 3.5,
                'prodi_id' => 2,
                'rombel_id' => 5
            ],
            [
                'nim' => '0110123111',
                'nama' => 'NAJLAA LUTHFI PRADANTI',
                'tmp_lahir' => 'Tasikmalaya',
                'tgl_lahir' => '1995-08-20',
                'ipk' => 3.2,
                'prodi_id' => 2,
                'rombel_id' => 5
            ],
            [
                'nim' => '0110123257',
                'nama' => 'MUHAMMAD HAFIDZ DAFFA',
                'tmp_lahir' => 'Pekanbaru',
                'tgl_lahir' => '1996-03-12',
                'ipk' => 3.8,
                'prodi_id' => 2,
                'rombel_id' => 5
            ],
            [
                'nim' => '0110123102',
                'nama' => 'MARSHA DIAH PRAMESTI',
                'tmp_lahir' => 'Pontianak',
                'tgl_lahir' => '1997-11-25',
                'ipk' => 3.4,
                'prodi_id' => 2,
                'rombel_id' => 5
            ],
            [
                'nim' => '0110123191',
                'nama' => 'ANGGUN PERMATASARI',
                'tmp_lahir' => 'Banjarmasin',
                'tgl_lahir' => '1995-05-15',
                'ipk' => 3.1,
                'prodi_id' => 2,
                'rombel_id' => 5
            ],
            [
                'nim' => '0110123062',
                'nama' => 'AHMAD MUHAMMAD JIBRIL',
                'tmp_lahir' => 'Jayapura',
                'tgl_lahir' => '1996-09-18',
                'ipk' => 3.6,
                'prodi_id' => 2,
                'rombel_id' => 5
            ],
            [
                'nim' => '0110123109',
                'nama' => 'ADELIA AFIFATUZZAHRA',
                'tmp_lahir' => 'Manokwari',
                'tgl_lahir' => '1997-01-10',
                'ipk' => 3.3,
                'prodi_id' => 2,
                'rombel_id' => 5
            ],
            [
                'nim' => '0110123086',
                'nama' => 'SYARIFAH KAMILA',
                'tmp_lahir' => 'Ambon',
                'tgl_lahir' => '1995-12-25',
                'ipk' => 3.5,
                'prodi_id' => 2,
                'rombel_id' => 5
            ],
            [
                'nim' => '0110123137',
                'nama' => 'M ARUN ALHARITS',
                'tmp_lahir' => 'Ternate',
                'tgl_lahir' => '1996-06-12',
                'ipk' => 3.2,
                'prodi_id' => 2,
                'rombel_id' => 5
            ],
            [
                'nim' => '0110123305',
                'nama' => 'NICOLA INDY ARIANA',
                'tmp_lahir' => 'Mataram',
                'tgl_lahir' => '1997-08-15',
                'ipk' => 3.8,
                'prodi_id' => 2,
                'rombel_id' => 6
            ],
            [
                'nim' => '0110123266',
                'nama' => 'WAHYU SUHEMI',
                'tmp_lahir' => 'Kupang',
                'tgl_lahir' => '1995-04-20',
                'ipk' => 3.4,
                'prodi_id' => 2,
                'rombel_id' => 6
            ],
            [
                'nim' => '0110123241',
                'nama' => 'DELAH',
                'tmp_lahir' => 'Sorong',
                'tgl_lahir' => '1996-10-12',
                'ipk' => 3.1,
                'prodi_id' => 2,
                'rombel_id' => 6
            ],
            [
                'nim' => '0110123069',
                'nama' => 'ABDUL FATTAH KAMIL',
                'tmp_lahir' => 'Merauke',
                'tgl_lahir' => '1997-07-15',
                'ipk' => 3.7,
                'prodi_id' => 2,
                'rombel_id' => 6
            ],
            [
                'nim' => '0110123121',
                'nama' => 'MUHAMAD REVAL WIJAYA',
                'tmp_lahir' => 'Bima',
                'tgl_lahir' => '1995-02-25',
                'ipk' => 3.3,
                'prodi_id' => 2,
                'rombel_id' => 6
            ],
            [
                'nim' => '0110123207',
                'nama' => 'MUHAMMAD ALBANI ILHAM',
                'tmp_lahir' => 'Banjarmasin',
                'tgl_lahir' => '1996-01-10',
                'ipk' => 3.6,
                'prodi_id' => 2,
                'rombel_id' => 6
            ],
            [
                'nim' => '0110123067',
                'nama' => 'ATAYA DWI TIRTOYONO',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1997-09-25',
                'ipk' => 3.9,
                'prodi_id' => 2,
                'rombel_id' => 6
            ],
            [
                'nim' => '0110123168',
                'nama' => 'ABDUL HAMID',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1995-06-05',
                'ipk' => 3.2,
                'prodi_id' => 2,
                'rombel_id' => 6
            ],
            [
                'nim' => '0110123184',
                'nama' => 'MUHAMMAD RIVALDI',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1996-11-20',
                'ipk' => 3.8,
                'prodi_id' => 2,
                'rombel_id' => 6
            ],
            [
                'nim' => '0110123034',
                'nama' => 'MUHAMMAD FARHAN DANNY',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1997-03-05',
                'ipk' => 3.5,
                'prodi_id' => 2,
                'rombel_id' => 6
            ],
            [
                'nim' => '0110323019',
                'nama' => 'ABDUSSALAM YAZID AHSAN SYAHID',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1995-02-12',
                'ipk' => 3.5,
                'prodi_id' => 3,
                'rombel_id' => 7
            ],
            [
                'nim' => '0110323020',
                'nama' => 'ADINDA YASMIN FIRDAUSI',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1996-08-25',
                'ipk' => 3.2,
                'prodi_id' => 3,
                'rombel_id' => 7
            ],
            [
                'nim' => '0110323039',
                'nama' => 'AHMAD ROIKHAN FIRDAUS',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1997-03-15',
                'ipk' => 3.8,
                'prodi_id' => 3,
                'rombel_id' => 7
            ],
            [
                'nim' => '0110323006',
                'nama' => 'AL FARID RINALDO',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1995-11-20',
                'ipk' => 3.1,
                'prodi_id' => 3,
                'rombel_id' => 7
            ],
        [
                'nim' => '0110323018',
                'nama' => 'ALFIAN NUGRAHA',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '1996-05-01',
                'ipk' => 3.6,
                'prodi_id' => 3,
                'rombel_id' => 7
            ],
            [
                'nim' => '0110323050',
                'nama' => 'ALI FIKRI ABDURROZAQ',
                'tmp_lahir' => 'Malang',
                'tgl_lahir' => '1996-01-05',
                'ipk' => 3.9,
                'prodi_id' => 3,
                'rombel_id' => 7
            ],
            [
                'nim' => '0110323015',
                'nama' => 'ARGYA NURSALSABILA PUTRI',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '1997-04-22',
                'ipk' => 3.7,
                'prodi_id' => 3,
                'rombel_id' => 7
            ],
            [
                'nim' => '0110323048',
                'nama' => 'FAHMI HAMID',
                'tmp_lahir' => 'Cirebon',
                'tgl_lahir' => '1995-10-15',
                'ipk' => 3.0,
                'prodi_id' => 3,
                'rombel_id' => 7
            ],
            [
                'nim' => '0110323014',
                'nama' => 'FAUZAN ALFARIZY SURYAMAN',
                'tmp_lahir' => 'Solo',
                'tgl_lahir' => '1996-07-28',
                'ipk' => 3.6,
                'prodi_id' => 3,
                'rombel_id' => 7
            ],
            [
                'nim' => '0110323052',
                'nama' => 'HANIFAN BIQALBI',
                'tmp_lahir' => 'Mataram',
                'tgl_lahir' => '1997-02-01',
                'ipk' => 3.5,
                'prodi_id' => 3,
                'rombel_id' => 7
            ],
            [
                'nim' => '0110323010',
                'nama' => 'HAVIAN SYAHPUTRA',
                'tmp_lahir' => 'Banjarmasin',
                'tgl_lahir' => '1997-09-10',
                'ipk' => 3.4,
                'prodi_id' => 3,
                'rombel_id' => 8
            ],
            [
                'nim' => '0110323054',
                'nama' => 'HOIRUNISA',
                'tmp_lahir' => 'Pekanbaru',
                'tgl_lahir' => '1996-03-12',
                'ipk' => 3.8,
                'prodi_id' => 3,
                'rombel_id' => 8
            ],
            [
                'nim' => '0110323049',
                'nama' => 'ILYAS RIFALDI',
                'tmp_lahir' => 'Pontianak',
                'tgl_lahir' => '1997-01-10',
                'ipk' => 3.3,
                'prodi_id' => 3,
               'rombel_id' => 8
            ],
            [
                'nim' => '0110323013',
                'nama' => 'LUTHFIA FAUZIYYAH',
                'tmp_lahir' => 'Bima',
                'tgl_lahir' => '1995-08-20',
                'ipk' => 3.2,
                'prodi_id' => 3,
                'rombel_id' => 8
            ],
            [
                'nim' => '0110323027',
                'nama' => 'MAHARDIKA ANDALUS',
                'tmp_lahir' => 'Banjarmasin',
                'tgl_lahir' => '1996-06-12',
                'ipk' => 3.5,
                'prodi_id' => 3,
                'rombel_id' => 8
            ],
            [
                'nim' => '0110323034',
                'nama' => 'MOH FAUZAN KAMIL',
                'tmp_lahir' => 'Jayapura',
                'tgl_lahir' => '1997-01-10',
                'ipk' => 3.8,
                'prodi_id' => 3,
                'rombel_id' => 8
            ],
            [
                'nim' => '0110323029',
                'nama' => 'MUHAMMAD ABDUL HAFIZH',
                'tmp_lahir' => 'Tasikmalaya',
                'tgl_lahir' => '1995-08-20',
                'ipk' => 3.2,
                'prodi_id' => 3,
                'rombel_id' => 8
            ],
            [
                'nim' => '0110323024',
                'nama' => 'MUHAMMAD AKMAL RAMY',
                'tmp_lahir' => 'Ternate',
                'tgl_lahir' => '1996-06-12',
                'ipk' => 3.5,
                'prodi_id' => 3,
                'rombel_id' => 8
            ],
            [
                'nim' => '0110323011',
                'nama' => 'MUHAMMAD ALFIN SAHAL',
                'tmp_lahir' => 'Manokwari',
                'tgl_lahir' => '1997-01-10',
                'ipk' => 3.8,
                'prodi_id' => 3,
                'rombel_id' => 8
            ],
            [
                'nim' => '0110323023',
                'nama' => 'MUHAMMAD AYYASY MUTAZERI',
                'tmp_lahir' => 'Mataram',
                'tgl_lahir' => '1997-02-01',
                'ipk' => 3.5,
                'prodi_id' => 3,
                'rombel_id' => 8
            ],
            [
                'nim' => '0110323035',
                'nama' => 'MUHAMMAD DAFFA WAHYUDI',
                'tmp_lahir' => 'Kupang',
                'tgl_lahir' => '1996-03-12',
                'ipk' => 3.8,
                'prodi_id' => 3,
                'rombel_id' => 9
            ],
            [
                'nim' => '0110323007',
                'nama' => 'MUHAMMAD KAFA BIILAHI',
                'tmp_lahir' => 'Merauke',
                'tgl_lahir' => '1997-07-15',
                'ipk' => 3.4,
                'prodi_id' => 3,
                'rombel_id' => 9
            ],
            [
                'nim' => '0110323032',
                'nama' => 'MUHAMMAD YUSUF HAIDAR AULIA',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1995-06-05',
                'ipk' => 3.2,
                'prodi_id' => 3,
                'rombel_id' => 9
            ],
            [
                'nim' => '0110323033',
                'nama' => 'MUHAMMAD ZACKY AL FIAN NUR',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1996-11-20',
                'ipk' => 3.8,
                'prodi_id' => 3,
                'rombel_id' => 9
            ],
            [
                'nim' => '0110323025',
                'nama' => 'MUHAMMAD ZHARFAN SUMANTRY',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1997-03-05',
                'ipk' => 3.5,
                'prodi_id' => 3,
                'rombel_id' => 9
            ],
            [
                'nim' => '0110323016',
                'nama' => 'MUKHAMAD HELMIAZRI',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1995-11-20',
                'ipk' => 3.1,
                'prodi_id' => 3,
                'rombel_id' => 9
            ],
            [
                'nim' => '0110323017',
                'nama' => 'NAILAH AFIFAH',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '1996-05-01',
                'ipk' => 3.6,
                'prodi_id' => 3,
                'rombel_id' => 9
            ],
            [
                'nim' => '0110323030',
                'nama' => 'NAJMAH SYIFA NUR ADILA',
                'tmp_lahir' => 'Pekanbaru',
                'tgl_lahir' => '1996-03-12',
                'ipk' => 3.8,
                'prodi_id' => 3,
                'rombel_id' => 9
            ],
            [
                'nim' => '0110323009',
                'nama' => 'NUR EL FATHIA',
                'tmp_lahir' => 'Pontianak',
                'tgl_lahir' => '1997-01-10',
                'ipk' => 3.3,
                'prodi_id' => 3,
                'rombel_id' => 9
            ],
            [
                'nim' => '0110323038',
                'nama' => 'RADHWA TSAMIRAH ULA',
                'tmp_lahir' => 'Bima',
                'tgl_lahir' => '1995-08-20',
                'ipk' => 3.2,
                'prodi_id' => 3,
                'rombel_id' => 9
            ]

        ]);

    }
}
