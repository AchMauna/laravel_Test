<!DOCTYPE html>
<html>
<body>	 
	<h3>Data Produk</h3>
 
	<a href="/produk"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="{{ route('updateData', $produk->produk_id) }}" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required" value="{{$produk->produk_nama}}"> <br/>
		Tipe <input type="text" name="tipe" required="required" value="{{$produk->produk_tipe}}"> <br/>
		Platform <input type="text" name="platform" required="required" value="{{$produk->produk_platform}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>