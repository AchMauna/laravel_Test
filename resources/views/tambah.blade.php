<!DOCTYPE html>
<html>
	<head>  
		<title>Tambah Data</title>
		@include('master.crudNav')
	</head>
		<body>	
			<div class="container">
			<div class="jumbotron" style="background-color:#FFFFFF">				
				<form action="/produk/store" method="post">
					{{ csrf_field() }}
					<div class="form-group">
					<label for="nama">Nama :</label>
					<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Game" required="required">
					</div>
					<div class="form-group">
					<label for="pwd">Tipe :</label>
					<input type="text" class="form-control" name="tipe" placeholder="Masukkan Genre Game" required="required">
					</div>
					<div class="form-group">
						<label for="pwd">Platform :</label>
						<input type="text" class="form-control" name="platform" placeholder="Masukkan Platform Game" required="required">
					</div>
					<button type="submit" class="btn btn-primary">Simpan Data</button>
				</form>
			</div>
			</div>
		</body>
</html>