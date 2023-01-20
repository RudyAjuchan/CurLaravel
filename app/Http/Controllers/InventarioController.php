<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inventario::with(['Articulo'])->where('estado',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventario = new Inventario();
        $inventario->articulo_id = $request->articulo_id;
        $inventario->compra = $request->compra;
        $inventario->venta = $request->venta;
        $inventario->cantidad = $request->cantidad;
        $inventario->tipo = $request->tipo;
        $inventario->motivo = $request->motivo;
        $inventario->save();
        return $inventario;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        $inventario->articulo = $inventario->Articulo;
        return $inventario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
        $inventario->articulo_id = $request->articulo_id;
        $inventario->compra = $request->compra;
        $inventario->venta = $request->venta;
        $inventario->cantidad = $request->cantidad;
        $inventario->tipo = $request->tipo;
        $inventario->motivo = $request->motivo;
        $inventario->save();
        return $inventario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        $inventario->estado = 0;
        $inventario->save();
    }
}
