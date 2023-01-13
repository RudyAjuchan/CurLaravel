<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('/api/marcas', 'MarcaController');
Route::apiResource('/api/medidas', 'MedidaController');
Route::apiResource('/api/categorias', 'CategoriaController');
Route::apiResource('/api/articulos', 'ArticuloController');
Route::apiResource('/api/usuarios', 'UsuarioController');
Route::apiResource('/api/monedas', 'MonedaController');
Route::apiResource('/api/images', 'ImageController');
Route::apiResource('/api/moneda_images', 'MonedaImageController');
Route::apiResource('/api/cajas', 'CajaController');
Route::apiResource('/api/compras', 'ComprasController');
Route::apiResource('/api/caja_compras', 'CajaCompraController');
Route::apiResource('/api/comprobantes', 'ComprobanteController');
Route::apiResource('/api/series', 'SerieController');
Route::apiResource('/api/inventarios', 'InventarioController');
Route::apiResource('/api/compra_inventarios', 'CompraInventarioController');
Route::apiResource('/api/caja_movimientos', 'CajaMovimientoController');
Route::apiResource('/api/metodos', 'MetodoController');
Route::apiResource('/api/facturacion', 'FacturacionController');
Route::apiResource('/api/ventas', 'VentaController');
Route::apiResource('/api/venta_inventarios', 'VentaInventarioController');
Route::apiResource('/api/caja_ventas', 'CajaVentaController');
Route::apiResource('/api/sucursales', 'SucursalController');
Route::apiResource('/api/documentos', 'DocumentoController');

Route::get('/', function () {
    return view('welcome');
});
