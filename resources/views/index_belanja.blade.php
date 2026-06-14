@extends('template_siswa_pert14')

@section('title', 'Keranjang Belanja Pertemuan 15')

@section('konten')

<div class="container mt-4 text-center">
    <h3>Keranjang Belanja</h3>
    <br>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ number_format ($k->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format ($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/hapus/{{$k -> ID}}" class="btn btn-danger mb-3">
                        Batal
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="/keranjangbelanja/tambah" class="btn btn-primary mb-3">
        Beli
    </a>
</div>

@endsection
