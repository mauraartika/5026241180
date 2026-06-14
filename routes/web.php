<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\FlashdiskController;


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

//pertemuan 14
Route::get('/siswa', [SiswaController::class, 'siswa_index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'siswa_create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'siswa_edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//latihan eas perempuan
Route::get('nilaikuliah', [NilaiKuliahController::class, 'index_nilai']);
Route::get('nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah_nilai']);
Route::post('nilaikuliah/store', [NilaiKuliahController::class, 'store_nilai']);
//latihan eas laki-laki
Route::get('keranjangbelanja', [BelanjaController::class, 'index_belanja']);
Route::get('keranjangbelanja/tambah', [BelanjaController::class, 'tambah_belanja']);
Route::post('keranjangbelanja/simpan', [BelanjaController::class, 'simpan_belanja']);
Route::get('keranjangbelanja/hapus/{id}', [BelanjaController::class, 'hapus_belanja']);

//pra eas - flashdisk
Route::get('flashdisk', [FlashdiskController::class, 'index_flashdisk']);
Route::get('flashdisk/tambah', [FlashdiskController::class, 'tambah_flashdisk']);
Route::post('flashdisk/store', [FlashdiskController::class, 'store_flashdisk']);
Route::get('flashdisk/hapus/{kodeflashdisk}', [FlashdiskController::class, 'hapus_flashdisk']);

