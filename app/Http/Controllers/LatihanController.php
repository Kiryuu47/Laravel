<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function Perkenalan($nama, $alamat, $umur)
    {
        $nama1 = $nama;
        $alamat1 = $alamat;
        $umur1 = $umur;

        return view('pages/perkenalan', compact('nama1', 'alamat1', 'umur1'));
    }

    public function siswa() {

        $a = [
            array('id' => 1, 'name' => 'Dadang', 'age' => 15, 'hobi' => ['SepakBola', 'Badminton']),
            array('id' => 2, 'name' => 'Dudung', 'age' => 18, 'hobi' => ['Turu', 'Editing']),
        ];
        // dd($a);
        return view('pages.siswa', ['siswa' => $a]);
    }

    public function dosen() {

        $a = [
            array(
                'id' => 1,
                'name' => 'Yusuf Batchtiar', 
                'mata' => 'Pemrograman Web',
                'mahasiswa' => [
                    [
                        'nama' => 'Muhammad Soleh', 
                        'nilai' => 78
                    ],
                    [
                        'nama' => 'Jujun Junaedi', 
                        'nilai' => 85
                    ],
                    [
                        'nama' => 'Mamat Alkatiri', 
                        'nilai' => 90
                    ]
                ]
            ),
            array(
                'id' => 2, 
                'name' => 'Yaris Riyadi', 
                'mata' => 'Pemrograman Moble',
                'mahasiswa' => [
                    [
                        'nama' => 'Alfred McTominay', 
                        'nilai' => 67
                    ],
                    [
                        'nama' => 'Bruno Kasmir', 
                        'nilai' => 90
                    ]
                ]
            ),
        ];
        // dd($a);
        return view('pages.dosen', ['dosen' => $a]);
    }

    public function televisi() {

        $tv = [
            ['channel' => 'GTV', 'jadwal' => [
                ['judul' => 'Spongebob Squarepants', 
                'jam_tayang' => '07.00 WIB', 
                'tanggal_tayang' => '20 JUNI 2022']
            ]
            ],
            ['channel' => 'RTV', 'jadwal' => [
                ['judul' => 'Zero One', 
                'jam_tayang' => '19.00 WIB', 
                'tanggal_tayang' => '15 JUNI 2022']
            ]
            ],
            ['channel' => 'MNC', 'jadwal' => [
                ['judul' => 'Upin & Ipin', 
                'jam_tayang' => '17.00 WIB', 
                'tanggal_tayang' => '04 AGUSTUS 2022']
            ]
            ],
            ['channel' => 'Trans 7', 'jadwal' => [
                ['judul' => 'Moto GP', 
                'jam_tayang' => '20.00 WIB', 
                'tanggal_tayang' => '17 FEBRUARI 2022']
            ]
            ],
            ['channel' => 'NET TV', 'jadwal' => [
                ['judul' => 'TTS', 
                'jam_tayang' => '20.00 WIB', 
                'tanggal_tayang' => '10 OKTOBER 2022']
            ]
            ]

        ];

        return view('pages.televisi', ['televisi' => $tv]);

    }

    public function belanja() {

        $beli = [
            ['nama' => 'Alfian', 
            'pembelian' =>
            [
                ['jenis' => 'SEPATU', 'merk' => 'VANS', 'harga' => '250000'],
                ['jenis' => 'BAJU', 'merk' => 'ERIGO', 'harga' => '100000'],
                ['jenis' => 'CELANA', 'merk' => 'JEANS', 'harga' => '150000'],
                ['jenis' => 'KUPLUK', 'merk' => 'VANS', 'harga' => '100000']
            ]
            ],

            ['nama' => 'DIDA', 
            'pembelian' =>
            [
                ['jenis' => 'TOPI', 'merk' => 'EIGER', 'harga' => '250000'],
                ['jenis' => 'BAJU', 'merk' => 'ERIGO', 'harga' => '100000'],
                ['jenis' => 'CELANA', 'merk' => 'JEANS', 'harga' => '150000']
            ]
            ]

        ];

        return view('pages.toko', ['belanja' => $beli]);
    }


    public function nilai_siswa() {

        $nilai = [
            ['nama' => 'AGUS', 
            'nilai' => [
                ['mapel' => 'Bahasa Indonesia', 'nilai_mapel' => '80'],
                ['mapel' => 'Bahasa Inggris', 'nilai_mapel' => '97'],
                ['mapel' => 'Produktif Kejuruan', 'nilai_mapel' => '67'],
                ['mapel' => 'Matematika', 'nilai_mapel' => '100']
            ]
            ],

            ['nama' => 'Mahmud', 
            'nilai' => [
                ['mapel' => 'Bahasa Indonesia', 'nilai_mapel' => '78'],
                ['mapel' => 'Bahasa Inggris', 'nilai_mapel' => '86'],
                ['mapel' => 'Produktif Kejuruan', 'nilai_mapel' => '90'],
                ['mapel' => 'Matematika', 'nilai_mapel' => '67']
            ]
            ],

            ['nama' => 'Rendi', 
            'nilai' => [
                ['mapel' => 'Bahasa Indonesia', 'nilai_mapel' => '90'],
                ['mapel' => 'Bahasa Inggris', 'nilai_mapel' => '50'],
                ['mapel' => 'Produktif Kejuruan', 'nilai_mapel' => '65'],
                ['mapel' => 'Matematika', 'nilai_mapel' => '78']
            ]
            ],

            ['nama' => 'Firman', 
            'nilai' => [
                ['mapel' => 'Bahasa Indonesia', 'nilai_mapel' => '78'],
                ['mapel' => 'Bahasa Inggris', 'nilai_mapel' => '90'],
                ['mapel' => 'Produktif Kejuruan', 'nilai_mapel' => '56'],
                ['mapel' => 'Matematika', 'nilai_mapel' => '78']
            ]
            ],

            ['nama' => 'Abdul', 
            'nilai' => [
                ['mapel' => 'Bahasa Indonesia', 'nilai_mapel' => '89'],
                ['mapel' => 'Bahasa Inggris', 'nilai_mapel' => '67'],
                ['mapel' => 'Produktif Kejuruan', 'nilai_mapel' => '80'],
                ['mapel' => 'Matematika', 'nilai_mapel' => '90']
            ]
            ]
        ];

        return view('pages.nilai_siswa', ['nilai_siswa' => $nilai]);
    }

}