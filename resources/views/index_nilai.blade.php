@extends('template3')

@section('title', 'Data Nilai Kuliah')

@section('konten')

<div class="container mt-4">
    <h3>Data Nilai Kuliah</h3>

    <a href="/nilaikuliah/tambah" class="btn btn-primary mb-3">
        Tambah Nilai Kuliah
    </a>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>

        <tbody>
            @foreach($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>

                <td>
                    @if($n->NilaiAngka <= 40)
                        D
                    @elseif($n->NilaiAngka <= 60)
                        C
                    @elseif($n->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>

                <td>{{ $n->NilaiAngka * $n->SKS }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
