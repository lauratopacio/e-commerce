<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Hana</title>
	{{-- estás llaves sirven para comentar código en las blade --}}
	{{-- Aquí agregarás todas las hojas de estilos del css --}}
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap_min.css') }}">
</head>
<body>

	{{-- contiene el la parte del nav --}}
  @include('partials.nav')

	{{-- contendrá la sección personalizada de cada página --}}
  @yield('content')



{{-- en las normas de optimización según google los archivos js van antes de cerrar el body --}}
</body>
</html>