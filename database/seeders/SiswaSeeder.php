<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $siswa = [
            ['nama' => 'M Aziz Muzaky',
            'nis' => '1001',
            'umur' => '17',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => 'Multimedia',
            'alamat' => 'Jalan Kopo,Gg. Melati 1'
            ],

            ['nama' => 'Arif Subandono',
            'nis' => '1002',
            'umur' => '19',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => 'IPA',
            'alamat' => 'Jalan Kopo,Gg. Melati 1'
            ],

            ['nama' => 'Issal Satria',
            'nis' => '1003',
            'umur' => '18',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => 'Mesin',
            'alamat' => 'Kopo Elok'
            ],

            ['nama' => 'Raya Bagja Pratama',
            'nis' => '1004',
            'umur' => '16',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => 'Bahasa Arab',
            'alamat' => 'Jalan Kopo,Gg. Melati 1'
            ],

            ['nama' => 'Fikri Al Ghifari',
            'nis' => '1005',
            'umur' => '17',
            'jenis_kelamin' => 'Laki-Laki',
            'jurusan' => 'Multimedia',
            'alamat' => 'Cangkuang'
            ]
        ];

    }
}
