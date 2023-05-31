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
    return view('index');
});

Route::get('/mahasiswa', function() {
    $mahasiswas = [
        'Mahasiswa 1',
        'Mahasiswa 2',
        'Mahasiswa 3',
        'Mahasiswa 4',
        'Mahasiswa 5',
        'Mahasiswa 6',
        'Mahasiswa 7',
        'Mahasiswa 8',
        'Mahasiswa 9',
        'Mahasiswa 10'
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
        'Statistika (matkul aneh)',
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