<!DOCTYPE html>
@extends('master.master')
@section('title', 'Login')
    
@section('content')   
<html>
	<head>  
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/Asset/css/aboutstyle.css" >
	</head>
		<header>
			<div class="container">
			<div class="jumbotron" style="background :none">			
				<form action="{{ route('postlogin') }}" method="post">
						{{ csrf_field() }}
						<div class="form-group">
						<label for="nama">Email :</label>
						<input type="email" class="form-control" name="email" placeholder="Masukkan Email" required="required">
						</div>
						<div class="form-group">
						<label for="pwd">Password :</label>
						<input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required">
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
			</div>
		</header>
</html>
@endsection