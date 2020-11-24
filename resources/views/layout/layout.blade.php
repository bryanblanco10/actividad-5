<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<link rel="icon" href='{{url("/Actividad1")}}/img/logo.png' type="image/ico" />
	<link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i|Oswald:400,500,600,700&amp;display=swap"
  />
	<link rel="stylesheet" href='{{url("/Actividad1")}}/bootstrap/css/bootstrap.min.css'>
	<link rel="stylesheet" href='{{url("/Actividad1")}}/css/styles.css'>
	
</head>
<body>
	<header class="header shadow">
		@include('layout.header')
	</header>

	<div class="content">
		@yield('content')
	</div>
	<footer class="footer">
		@include('layout.footer')
	</footer>	
	<script src='{{url("/Actividad1")}}/jquery/jquery-3.5.1.min.js'></script>
	<script src='{{url("/Actividad1")}}/popper/popper.min.js'></script>
	<script src='{{url("/Actividad1")}}/bootstrap/js/bootstrap.min.js'></script>

	@yield('js')
</body>
</html>