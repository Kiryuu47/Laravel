<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['title' => 'Belajar Huruf Hijaiyah',
            'content' => 'Lorem Ipsum sit amet dolor'],
            ['title' => 'Indonesia U-19 Gagal Lolos Semifinal',
            'content' => 'Awoakwokwok'],
            ['title' => 'Cara Cepat belajar Pemrograman',
            'content' => 'Try & Error Trus Menerus'],
        ];

        DB::table('Posts')->insert($sample);
    }
}
