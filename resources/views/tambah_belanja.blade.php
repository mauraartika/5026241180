<!-- Menghubungkan dengan view template master -->
@extends('template_siswa_pert14')

@section('title', 'Tambah Data Belanja')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<center>


<br />
<br />

<div class="card mx-auto" style="max-width: 900px;">
<div class="card-header text-center">
Form Tambah Data Belanja
</div>

<div class="card-body">
<form action="/keranjangbelanja/simpan" method="post">
{{ csrf_field() }}

<div class="row mb-3">
<label for="nama" class="col-sm-3 col-form-label">Kode Barang</label>
<div class="col-sm-6">
<input type="text" name="KodeBarang" id="kodebarang" class="form-control" required>
</div>
</div>

<div class="row mb-3">
<label for="jabatan" class="col-sm-3 col-form-label">Jumlah Pembelian</label>
<div class="col-sm-6">
<input type="text" name="Jumlah" id="jumlah" class="form-control" required>
</div>
</div>

<div class="row mb-3">
<label for="umur" class="col-sm-3 col-form-label">Harga per Item</label>
<div class="col-sm-6">
<input type="number" name="Harga" id="harga" class="form-control" required>
</div>
</div>

<div class="row">
<div class="offset-sm-2 col-sm-10">
<input type="submit" value="Simpan Data" class="btn btn-primary">
<a href="/keranjangbelanja" class="btn btn-info ms-4">Kembali</a>
</div>
</div>
</form>
</center>
@endsection
