<!-- Menghubungkan dengan view template master -->
@extends('template_siswa_pert14')

@section('title', 'Kode Soal nilai_peserta')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<center>


<br />
<br />

<div class="card mx-auto" style="max-width: 900px;">
<div class="card-header text-center">
Form Tambah Nilai Peserta
</div>

<div class="card-body">
<form action="/eas/simpan" method="post">
{{ csrf_field() }}

<div class="row mb-3">
<label for="nama" class="col-sm-3 col-form-label">No Peserta</label>
<div class="col-sm-6">
<input type="text" name="nopeserta" id="nopeserta" class="form-control" required>
</div>
</div>

<div class="row mb-3">
<label for="jabatan" class="col-sm-3 col-form-label">Nilai Teori</label>
<div class="col-sm-6">
<input type="text" name="nilaiteori" id="nilaiteori" class="form-control" required>
</div>
</div>

<div class="row mb-3">
<label for="umur" class="col-sm-3 col-form-label">Nilai Praktek</label>
<div class="col-sm-6">
<input type="number" name="nilaipraktek" id="nilaipraktek" class="form-control" required>
</div>
</div>

<div class="row">
<div class="offset-sm-2 col-sm-10">
<input type="submit" value="Simpan Data" class="btn btn-primary">
</div>
</div>
</form>
</center>
@endsection
