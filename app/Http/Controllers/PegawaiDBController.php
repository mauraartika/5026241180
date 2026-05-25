<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->paginate(10);

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);

    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('pegawai')
        ->where('pegawai_nama', 'like', "%" . $cari . "%")
        ->paginate();

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('tambah');

    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);

    }

}

