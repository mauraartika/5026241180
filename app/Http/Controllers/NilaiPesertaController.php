<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPesertaController extends Controller
{
    public function eas_index() {
        $nilaipeserta = DB::table('nilai_peserta') -> get();
        return view('eas_index', compact('nilaipeserta'));
    }

    public function eas_tambah() {
        return view('eas_tambah');
    }

    public function eas_simpan(Request $request) {
        DB::table('nilai_peserta') -> insert([
            'id' => $request -> id,
            'nopeserta' => $request -> nopeserta,
            'nilaiteori' => $request -> nilaiteori,
            'nilaipraktek' => $request -> nilaipraktek
        ]);

        return redirect('/eas');
    }
}
