<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $jurusan = [
            ['nama_jurusan' => 'Multimedia',
            'singkatan' => 'MM',
            'pengajar' => 'Sandi Al Mansyur',
            'jumlah_p' => '5',
            'jumlah_m' => '294'
            ],

            $jurusan = [
                ['nama_jurusan' => 'Teknik Komputer Jaringan',
                'singkatan' => 'TKJ',
                'pengajar' => 'Muhammad Ridwan',
                'jumlah_p' => '6',
                'jumlah_m' => '234'
                ],
            ],

            $jurusan = [
                ['nama_jurusan' => 'Rekayasa Perangkat Lunak',
                'singkatan' => 'RPL',
                'pengajar' => 'Mahmud',
                'jumlah_p' => '5',
                'jumlah_m' => '250'
                ],
            ],

            $jurusan = [
                ['nama_jurusan' => 'Teknik Kendaraan Ringan',
                'singkatan' => 'TKR',
                'pengajar' => 'Kamal Fadilah',
                'jumlah_p' => '5',
                'jumlah_m' => '178'
                ],
            ],

            $jurusan = [
                ['nama_jurusan' => 'Animasi',
                'singkatan' => 'Animation',
                'pengajar' => 'Elon Musk',
                'jumlah_p' => '5',
                'jumlah_m' => '234'
                ],
            ]
        ];

    }
}
