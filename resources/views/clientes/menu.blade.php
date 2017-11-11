<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca Libros</title>
</head>
<body>
	<div align="center">
		<a href="/libros/public/clientes">Clientes</a> -
	  		<a href="/libros/public/proveedores">Proveedores</a> - <a href="/libros/public/libros">Libros</a> - <a href="/libros/public/stock">Stock</a> - <a href="/biblioteca_libros/public/facturas/index">Facturas</a>
		<br><br>
		<div>
			@yield('content')
		</div>
	</div>
</body>
</html>