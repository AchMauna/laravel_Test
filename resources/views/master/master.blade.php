<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Asset/css/style.css" >
    <title>@yield('title')</title>
    <link rel="icon" href="screen.ico"/>
</head>
<body>
    @include('master._navigasi')
    @yield('content')
</body>
</html>