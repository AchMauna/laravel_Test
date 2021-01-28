<!DOCTYPE html>
<html>
<head>
	<title>View Tabel Produk</title>
</head>
<body>

	<h3>Data Produk</h3>

	<a href="/produk/tambah"> + Tambah Produk Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Tipe</th>
			<th>Platform</th>
			<th>Opsi</th>
		</tr>
		@foreach($produk as $p)
		<tr>
			<td>{{ $p->produk_nama }}</td>
			<td>{{ $p->produk_tipe }}</td>
			<td>{{ $p->produk_platform }}</td>
			<td>
				<a href="{{ route('editData', $p->produk_id) }}">Edit</a>
				<a href="{{ route('deleteData', $p->produk_id) }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>