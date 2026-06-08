<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\NilaiKuliahController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', [DosenController::class, 'biodata']);

//tugas pertemuan 7

Route::get('intro_pert1', [DosenController::class, 'intro']);

Route::get('news', [DosenController::class, 'news']);

Route::get('news1', [DosenController::class, 'news1']);

Route::get('5026241180', [DosenController::class, 'nrp']);

Route::get('contoh', [DosenController::class, 'contoh']);

Route::get('responsive', [DosenController::class, 'responsive']);

Route::get('template', [DosenController::class, 'template']);

Route::get('index_pertemuan5', [DosenController::class, 'index_pertemuan5']);

Route::get('linktree', [DosenController::class, 'linktree']);


//pertemuan 9 (zooom)
//blog
Route::get('/blog9', [BlogController::class, 'home']);
Route::get('/blog9/tentang', [BlogController::class, 'tentang']);
Route::get('/blog9/kontak', [BlogController::class, 'kontak']);
Route::get('/pegawai/edit', [PegawaiController::class, 'formulir']);


//pertemuan 11 dan 13 (CRUD tabel pegawai)
// Route::get ()
Route::get('/pegawai2', [PegawaiDBController::class,'index']);
Route::get('/pegawai2tambah', [PegawaiDBController::class,'tambah']);
Route::post('/pegawai2store', [PegawaiDBController::class,'store']);
Route::get('/pegawai2edit/{id}', [PegawaiDBController::class,'edit']);
Route::post('/pegawai2update', [PegawaiDBController::class,'update']);
Route::get('/pegawai2hapus/{id}', [PegawaiDBController::class,'hapus']);
Route::get('/pegawai2cari', [PegawaiDBController::class,'cari']);

//latihan eas
Route::get('nilaikuliah', [NilaiKuliahController::class, 'index_nilai']);
Route::get('nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah_nilai']);
Route::post('nilaikuliah/store', [NilaiKuliahController::class, 'store_nilai']);

