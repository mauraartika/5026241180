<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //

public function index(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
}

public function biodata(){
    $nama = "Maura Artika Tamadhipta";
    $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];
    return view('biodata',['nama' => $nama, 'matkul' => $pelajaran]);
}

public function intro(){
    return view('intro');
}

public function news(){
    return view('news');
}

public function news1(){
    return view('news1');
}

public function nrp(){
    return view('5026241180');
}

public function contoh(){
    return view('contoh');
}

public function responsive(){
    return view('responsive');
}

public function template(){
    return view('template');
}

public function index_pertemuan5(){
    return view('index_pertemuan5');
}

public function linktree(){
    return view('linktree');
}
}
