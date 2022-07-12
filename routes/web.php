<?php

use App\Http\Controllers\LatihanController;
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