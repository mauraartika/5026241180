<!-- Menghubungkan dengan view template master -->
@extends('template2')

@section('title', 'Data Pegawai')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<center>

	<br/>
	<br/>
    	<p>Cari Data Pegawai :</p>
	<form action="/pegawai2cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." class="form-control">
		<input type="submit" value="CARI" class="btn btn-secondary">
	</form>

	<table class="table table-stripped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai2edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>

				<a href="/pegawai2hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <ul class="pagination" style="margin:20px 0">
        {{ $pegawai-> links() }}
    </ul>
    <a href="/pegawai2tambah" class="btn btn-primary">Tambah Pegawai Baru</a>
</center>
@endsection
