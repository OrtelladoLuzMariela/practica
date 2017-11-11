<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Listado_facturas</title>
</head>
<body>
<h1 align="center">Listado de Factura</h1>
<div class="container">
		<div class="row">
			<div class="pull-right">
				<a href="/libros/nuevo" class="btn btn-info" role="button">Nueva Factura</a>
			</div>
		</div><br>
		<table class="table table-bordered">
			<tr class="info" align="center">
				<td>Id</td>
				<td>Nro Factura</td>
				<td>Tipo Factura</td>
				<td>Fecha</td>
				<td>Acción</td>
			</tr>
			<tr align="center">
				<td>Id</td>
				<td>Nro Factura</td>
				<td>Tipo Factura</td>
				<td>Fecha</td>
				<td>
					<button class="btn btn-warning">Editar</button>
					<button class="btn btn-danger">Eliminar</button>
				</td>
			</tr>
		</table>
	</div>

</body>
</html>