{{ session("mensaje") }}

	<br><br>

	<a href="facturas/create">Nueva Factura</a>

	<br><br>

	<table border="1">
		<tr>
			<th>Nro Factura</th>
			<th>Fecha</th>
			<th>Tipo</th>
			<th>Cliente</th>
			<th>Total</th>
			<th>-</th>
	    </tr>

	    @foreach ($facturas_list as $factura)

	   
				<a href="facturas/{{ $factura->id }}/detalle/Add">Detalle</a>
			</td>
	    </tr>

	    @endforeach
	</table>
	
