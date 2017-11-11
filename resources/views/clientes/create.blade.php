@extends('menuPrincipal')
@section('content')
{{session("mensaje")}}
<br>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<form method="POST" action="{{ asset('clientes') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="container">
  	<div class="row">
  		<div class="col-md-1">
  			<label for="Nombre">Nombre</label>
  		</div>	
  		<div class="col-md-4">
  			<input type="text" class="form-control" name="">
  		</div>

  		<div class="col-md-1">
  			<label for="Nombre">Nombre</label>
  		</div>	
  		<div class="col-md-4">
  			<input type="text" class="form-control" name="">
  		</div>
  	</div>
  </div>

  Nombre: <input type="text" name="txtNombre"><br>

  Apellido: <input type="text" name="txtApellido"><br>

  DNI: <input type="text" name="txtDNI"><br>

  Fecha de Nacimiento: <input type="date" name="txtFechaNacimiento"><br>

  Domicilio: <input type="text" name="txtDomicilio"><br>

  <input type="submit" value="Guardar datos">
</form>
<br><br>
<a href="/biblioteca_libros/public/clientes">Listado</a>
@endsection
