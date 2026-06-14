<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaController extends Controller
{
    public function index_belanja() {
        //mengambil tabel yang ada di dbeaver
        $keranjangbelanja = DB::table('keranjangbelanja') -> get();
        return view('index_belanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function tambah_belanja() {
        return view('tambah_belanja');
    }

    public function simpan_belanja(Request $request) {
        DB::table('keranjangbelanja') -> insert ([
            'kodebarang' => $request->KodeBarang,
            'jumlah' => $request->Jumlah,
            'harga' => $request->Harga
        ]);
        return redirect('/keranjangbelanja');
    }

    public function hapus_belanja($id) {
        DB::table('keranjangbelanja')->where('ID', $id) -> delete();
        return redirect('/keranjangbelanja');
    }
}
