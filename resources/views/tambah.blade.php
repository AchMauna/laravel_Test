<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h3>Data Produk</h3>
 
	<a href="/produk"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/produk/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Tipe <input type="text" name="tipe" required="required"> <br/>
		Platform <input type="text" name="platform" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>