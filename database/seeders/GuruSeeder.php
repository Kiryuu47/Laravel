<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $guru = [
            ['nama' => 'Dian Andayani',
            'nik' => '4001',
            'umur' => '35',
            'jenis_kelamin' => 'Perempuan',
            'mapel' => 'Bahasa Indonesia',
            'alamat' => 'Jalan. Purnama no 34,Bandung'
            ],

            ['nama' => 'Wahyu Sulaiman',
            'nik' => '4002',
            'umur' => '29',
            'jenis_kelamin' => 'Laki-Laki',
            'mapel' => 'Bahasa Arab',
            'alamat' => 'Nataendah'
            ],

            ['nama' => 'Rian Adiwijaya',
            'nik' => '4003',
            'umur' => '27',
            'jenis_kelamin' => 'Laki-Laki',
            'mapel' => 'Penjaskes',
            'alamat' => 'Jalan. Kopo'
            ],

            ['nama' => 'Fitri Novita',
            'nik' => '4004',
            'umur' => '40',
            'jenis_kelamin' => 'Perempuan',
            'mapel' => 'IPA',
            'alamat' => 'Rancamanyar'
            ],

            ['nama' => 'Bima Satria',
            'nik' => '4005',
            'umur' => '27',
            'jenis_kelamin' => 'Laki-Laki',
            'mapel' => 'Sejarah',
            'alamat' => 'Cangkuang Kulon'
            ]
        ];

    }
}
