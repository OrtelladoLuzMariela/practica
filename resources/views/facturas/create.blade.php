@extends('menuPrincipal')
@section('content')
  {{ session("mensaje") }}
  <br>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <form method="POST" action="{{ asset('facturas') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    Numero <input type="number" name="txtNumero"><br>

    Fecha: <input type="date" name="txtFecha"><br>

    Tipo:
    <select name="cboTipo">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
    </select>
    <br>

    Cliente:
    <select name="cboCliente">
      @foreach ($clientes_list as $cliente)
        <option value="{{ $cliente->id }}">
          {{ $cliente->persona->apellido }}, {{ $cliente->persona->nombre }}
        </option>
      @endforeach
    </select>

    <br>

    <input type="submit" value="Guardar datos">
  </form>

  <br><br>

  <a href="/biblioteca_libros/public/facturas">Listado</a>
@endsection