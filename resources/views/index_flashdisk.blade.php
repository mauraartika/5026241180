@extends('template_siswa_pert14')

@section('title', 'Data Flashdisk')

@section('konten')

<div class="container mt-4">
    <h3>Data Flashdisk</h3>

    <a href="flashdisk/tambah" class="btn btn-primary mb-3">
        Tambah Flashdisk
    </a>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Flashdisk</th>
                <th>Merk Flashdisk</th>
                <th>Stock Flashdisk</th>
                <th>Tersedia</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($flashdisk as $f)
            <tr>
                <td>{{ $f->kodeflashdisk }}</td>
                <td>{{ $f->merkflashdisk }}</td>
                <td>{{ $f->stockflashdisk }}</td>
                <td>{{ $f->tersedia }}</td>
                <td>
                    <a href="/flashdisk/hapus/{{ $f -> kodeflashdisk}}" class="btn btn-danger mb-3">Hapus</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <ul class="pagination" style="margin:20px 0">
            {{ $flashdisk -> links() }}
    </ul>
</div>

@endsection
