<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;


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
Route::get('/pegawai', [PegawaiController::class, 'formulir']);
