<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo','Default') | Panel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/plugins/bootstrap/fonts/style.css')}}">
	
</head>
<body>
<header>
	@include('admin.partes.nav')	
</header>

<section class="section">
@include('flash::message')	
@yield('contenido')

</section>

<footer>
	
<h1>pie</h1>

</footer>
<script src="{{asset('plugins/jquery/jquery.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>