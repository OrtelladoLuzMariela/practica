<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Listado_clientes</title>
</head>
<body>

	<h1 align="center">Listado de Clientes</h1>

	<div class="container">
		<div class="row">
			<div class="pull-right">
				<a href="/biblioteca_libros/public/clientes/nuevo" class="btn btn-info" role="button">Nuevo Cliente</a>
			</div>
		</div><br>

		<table class="table table-bordered">
			<tr class="info" align="center">
				<td>Id</td>
				<td>Apellido</td>
				<td>Nombre</td>
				<td>Acción</td>
			</tr>
			<tr align="center">
				<td>Id</td>
				<td>Apellido</td>
				<td>Nombre</td>
				<td>
					<button class="btn btn-warning">Editar</button>
					<button class="btn btn-danger">Eliminar</button>
				</td>
			</tr>
		</table>
	</div>

</body>
</html>

