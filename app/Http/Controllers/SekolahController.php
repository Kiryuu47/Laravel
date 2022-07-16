<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa()
    {

        $siswa = Post::all();
        return view('sekolah.siswa', compact('siswa'));
    }

    public function guru()
    {

        $guru = Post::all();
        return view('sekolah.guru', compact('guru'));
    }

    public function jurusan()
    {

        $jurusan = Post::all();
        return view('sekolah.jurusan', compact('jurusan'));
    }
}
