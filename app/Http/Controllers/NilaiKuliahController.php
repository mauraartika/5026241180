<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index_nilai() {
        //mengambil nilai dari tabel nilaikuliah
        $nilaikuliah = DB::table('nilaikuliah') -> get();
        //menampilkan di index
        return view('index_nilai',
        ['nilaikuliah' => $nilaikuliah]);
    }

    public function tambah_nilai() {
        return view('tambah_nilai');

    }

    public function store_nilai(request $request) {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect('/nilaikuliah');
    }
}
