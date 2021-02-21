<!DOCTYPE html>
<html>
	<head>
		<title>Halaman CRUD</title>
	@include('master.crudNav')
	</head>
	<body>
		<div class="container">                 
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Tipe</th>
						<th>Platform</th>
						<th> </th>
					</tr>
					@foreach($produk as $key => $p)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $p->produk_nama }}</td>
						<td>{{ $p->produk_tipe }}</td>
						<td>{{ $p->produk_platform }}</td>
						<td class="text-right">
							<a class="btn btn-info btn-xs" href="{{ route('editData', $p->produk_id) }}">Edit</a>
							<a class="btn btn-danger btn-xs" href="{{ route('deleteData', $p->produk_id) }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</body>
</html>
