<?php

/*Route::resource("facturas", "FacturaController");

Route::resource('clientes', "ClienteController");
Route::get('facturas/{id}/detalle/add', function (){
    'facturaController@detalleadd'
});

Route::get('facturas/{id}/detalle/add', 'facturaController@detalleadd');

Route::get('/clientes/nuevo', function () {
    return view('clientes/create');
});

Route::get('/libros/nuevo', function () {
    return view('libros/create');
});

Route::get('/stock/nuevo', function () {
    return view('stock/create');
});

Route::get('/clientes/listado', function () {
    return view('clientes/listado');
});

Route::get('/proveedores/listado', function () {
    return view('proveedores/listado');
});

Route::get('/libros/listado', function () {
    return view('libros/listado');
});

Route::get('/stock/listado', function () {
    return view('stock/listado');
});

Route::get('facturas/index', function () {
    return view('facturas/index');
});*/

Route::get('/', function () {
    return view('clientes/menu');
});


/*Route::post('clientes', function () {

	return view('mensaje');
});*/

Route::resource("clientes", "ClienteController");
Route::resource("proveedores", "ProveedorController");
Route::resource("libros", "LibroController");
Route::resource("stock", "StockController");
Route::resource("facturas", "FacturaController");

Route::get('facturas/{id}/detalle/add', 'FacturaController@detalleadd');