<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/about');
});

Route::get('/mahasiswa', function() {
    $mahasiswas = [
        [
            'nama' => 'Radi Alpiyanto',
            'npm' => '2110631170079',
            'kelas' => '4F TI',
        ],
        [
            'nama' => 'Hadi Royan Firdaus',
            'npm' => '2110631170079',
            'kelas' => '4F TI',
        ],
        [
            'nama' => 'Daffa Farelian',
            'npm' => '2110631170079',
            'kelas' => '4F TI',
        ],
        [
            'nama' => 'Tegar Pamungkas',
            'npm' => '2110631170079',
            'kelas' => '4F TI',
        ],
        [
            'nama' => 'Fitra Fajar',
            'npm' => '2110631170079',
            'kelas' => '4F TI',
        ],
        [
            'nama' => 'Bagas Aqmal',
            'npm' => '2110631170079',
            'kelas' => '4F TI',
        ],
        [
            'nama' => 'Dimas Aryansyah',
            'npm' => '2110631170079',
            'kelas' => '4F TI',
        ],
        [
            'nama' => 'Dimas Farid',
            'npm' => '2110631170079',
            'kelas' => '4F TI',
        ],
        [
            'nama' => 'Silviana Angelicca',
            'npm' => '2110631170079',
            'kelas' => '4F TI',
        ],
        [
            'nama' => 'Risa Nur Fitriyani',
            'npm' => '2110631170079',
            'kelas' => '4F TI',
        ],
    ];
    return view('layouts.mahasiswa', compact('mahasiswas'));
});

Route::get('/mata-kuliah', function() {
    $matkuls = [
        'Kalkulus',
        'Aljabar Linear',
        'Fisika',
        'Algoritma & Pemrograman',
        'Keamanan Sistem',
        'Jaringan Komputer',
        'Pemgrograman Berbasis Web',
        'Statistika dan Probabilitas',
        'Kecerdasan Buatan',
        'Agama Islam'
    ];
    return view('layouts.matkul', compact('matkuls'));
});
Route::get('/dosen', function() {
    $dosens = [
        'Dosen 1',
        'Dosen 2',
        'Dosen 3',
        'Dosen 4',
        'Dosen 5',
        'Dosen 6',
        'Dosen 7',
        'Dosen 8',
        'Dosen 9',
        'Dosen 10'
    ];
    return view('layouts.dosen', compact('dosens'));
});

Route::get('/about', function() {
    return view('layouts.about');
});