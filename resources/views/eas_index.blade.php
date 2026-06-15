@extends('template_siswa_pert14')

@section('title', 'Kode Soal nilai_peserta')

@section('konten')

<div class="container mt-4 text-center">
    <h3>Nilai Peserta</h3>
    <a href="/eas/tambah" class="btn btn-primary mb-3">
        Tambah Data
    </a>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Peserta</th>
                <th>Nilai Teori</th>
                <th>Nilai Praktek</th>
                <th>Rata-Rata</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($nilaipeserta as $n)
            @php
                $ratarata = ($n -> nilaiteori + $n -> nilaipraktek) / 2;
            @endphp
            <tr>
                <td>{{ $n -> id }}</td>
                <td>{{ $n -> nopeserta }}</td>
                <td>{{ $n -> nilaiteori }}</td>
                <td>{{ $n -> nilaipraktek }}</td>
                <td>{{ $ratarata }}</td>
                <td>
                    @if($ratarata >= 75)
                       <p class="bg-success text-white">Lulus</p>
                    @else
                        <p class="bg-danger text-white">Tidak Lulus</p>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
</div>

@endsection
