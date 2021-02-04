<!DOCTYPE html>
<html>
<html>
	<head>  
		<title>Edit Data</title>
		@include('master.crudNav')
	</head>
		<body>	
			  <div class="container">
				<div class="jumbotron" style="background-color:#FFFFFF">				
					<form action="{{ route('updateData', $produk->produk_id) }}" method="post">
						{{ csrf_field() }}
						<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama Game" value="{{$produk->produk_nama}}">
						</div>
						<div class="form-group">
						<label for="pwd">Tipe :</label>
						<input type="text" class="form-control" name="tipe" required="required" placeholder="Masukkan Genre Game" value="{{$produk->produk_tipe}}">
						</div>
						<div class="form-group">
							<label for="pwd">Platform :</label>
							<input type="text" class="form-control" name="platform" required="required" placeholder="Masukkan Platform Game" value="{{$produk->produk_platform}}">
						</div>
						<button type="submit" class="btn btn-primary">Simpan Data</button>
					</form>
				</div>
			</div>
		</body>
</html>