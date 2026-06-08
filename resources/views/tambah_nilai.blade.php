<!-- Menghubungkan dengan view template master -->
@extends('template3')

@section('title', 'Tambah Nilai Kuliah')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<center>


<br />
<br />

<div class="card mx-auto" style="max-width: 900px;">
<div class="card-header text-center">
Form Tambah Nilai
</div>

<div class="card-body">
<form action="/nilaikuliah/store" method="post">
{{ csrf_field() }}

<div class="row mb-3">
<label for="nama" class="col-sm-3 col-form-label">NRP</label>
<div class="col-sm-6">
<input type="text" name="NRP" id="nrp" class="form-control" required>
</div>
</div>

<div class="row mb-3">
<label for="jabatan" class="col-sm-3 col-form-label">Nilai Angka</label>
<div class="col-sm-6">
<input type="text" name="NilaiAngka" id="nilaiangka" class="form-control" required>
</div>
</div>

<div class="row mb-3">
<label for="umur" class="col-sm-3 col-form-label">SKS</label>
<div class="col-sm-6">
<input type="number" name="SKS" id="sks" class="form-control" required>
</div>
</div>

<div class="row">
<div class="offset-sm-2 col-sm-10">
<input type="submit" value="Simpan Data" class="btn btn-primary">
<a href="/nilaikuliah" class="btn btn-info ms-4"> Kembali</a>
</div>
</div>

</center>
@endsection
