<!-- Menghubungkan dengan view template master -->
@extends('template_siswa_pert14')

@section('title', 'Tambah Flashdisk')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<center>


<br />
<br />

<div class="card mx-auto" style="max-width: 900px;">
<div class="card-header text-center">
Form Tambah Flashdisk
</div>

<div class="card-body">
<form action="/flashdisk/store" method="post">
{{ csrf_field() }}

<div class="row mb-3">
<label for="nama" class="col-sm-3 col-form-label">Merk Flashdisk</label>
<div class="col-sm-6">
<input type="text" name="merkflashdisk" id="merkflashdisk" class="form-control" required>
</div>
</div>

<div class="row mb-3">
<label for="jabatan" class="col-sm-3 col-form-label">Stock flashdisk</label>
<div class="col-sm-6">
<input type="text" name="stockflashdisk" id="stockflashdisk" class="form-control" required>
</div>
</div>

<div class="row mb-3">
<label for="umur" class="col-sm-3 col-form-label">tersedia</label>
<div class="col-sm-6">
<input type="number" name="tersedia" id="tersedia" class="form-control" required>
</div>
</div>

<div class="row">
<div class="offset-sm-2 col-sm-10">
<input type="submit" value="Simpan Data" class="btn btn-primary">
<a href="/flashdisk" class="btn btn-info ms-4"> Kembali</a>
</div>
</div>

</center>
@endsection
