<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashdiskController extends Controller
{
    public function index_flashdisk() {
        $flashdisk = DB::table('flashdisk') -> paginate(5);
        return view('index_flashdisk', ['flashdisk' => $flashdisk]);
    }

    public function tambah_flashdisk() {
        return view('tambah_flashdisk');
    }

    public function store_flashdisk(Request $request) {
        DB::table('flashdisk') -> insert ([
            'merkflashdisk' => $request -> merkflashdisk,
            'stockflashdisk' => $request -> stockflashdisk,
            'tersedia' => $request -> tersedia
        ]);
        return redirect('/flashdisk');
    }

    public function hapus_flashdisk($kodeflashdisk) {
        DB::table('flashdisk') -> where('kodeflashdisk', $kodeflashdisk) -> delete();
        return redirect('/flashdisk');
    }
}
