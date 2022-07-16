<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', function () {
    return view('welcome');
});


// Route Basic
Route::get('about', function () {
    return view('tentang');
});

Route::get('profile', function () {
    $nama = "Zacky";

    return view('pages/profile', compact('nama'));
});

Route::get('biodata/{nama}', function ($a) {
    return view('pages/biodata', compact('a'));

});

Route::get('jajanan/{makanan}/{minuman}/{harga}/{menu?}', function ($makanan, $minuman, $harga, $a = "-") {
    return view('pages/jajanan', compact('makanan', 'minuman', 'harga', 'a'));

});

Route::get('pemesanan/{makanan}/{minuman}/{cemilan}', function ($makanan, $minuman, $cemilan) {
    return view('pages/pemesanan', compact('makanan', 'minuman', 'cemilan'));
});

Route::get('pemesanan_2/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {
    return view('pages/pemesanan_2', compact('makanan', 'minuman', 'cemilan'));
});

// Pemanggilan Route dengan Controller
Route::get('latihan/{nama}/{alamat}/{umur}', [LatihanController::class, 'perkenalan']);

Route::get('siswa', [LatihanController::class, 'siswa']);

Route::get('dosen', [LatihanController::class, 'dosen']);

Route::get('televisi', [LatihanController::class, 'televisi']);

Route::get('belanja', [LatihanController::class, 'belanja']);

Route::get('nilai_siswa', [LatihanController::class, 'nilai_siswa']);

// Route Post
Route::get('post', [PostController::class, 'tampil']);

Route::get('post/{id}', [PostController::class, 'search']);

Route::get('post/judul/{title}', [PostController::class, 'search_title']);

Route::get('post/edit/{id}/{title}/{content}', [PostController::class, 'edit']);

Route::get('post/tambah/{title}/{content}', [PostController::class, 'tambah']);

Route::get('post/delete/{id}', [PostController::class, 'hapus']);
