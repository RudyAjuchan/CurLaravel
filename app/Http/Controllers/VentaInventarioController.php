<?php

namespace App\Http\Controllers;

use App\Models\Venta_inventario;
use Illuminate\Http\Request;

class VentaInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Venta_inventario::with(['Inventario','Venta'])->where('estado',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta_inventario = new Venta_inventario();
        $venta_inventario->inventario_id = $request->inventario_id;
        $venta_inventario->venta_id = $request->venta_id;
        $venta_inventario->precio = $request->precio;
        $venta_inventario->cantidad = $request->cantidad;
        $venta_inventario->save();
        return $venta_inventario;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta_inventario  $venta_inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Venta_inventario $venta_inventario)
    {
        $venta_inventario->inventario = $venta_inventario->Inventario;
        $venta_inventario->venta = $venta_inventario->Venta;
        return $venta_inventario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta_inventario  $venta_inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta_inventario $venta_inventario)
    {
        $venta_inventario->inventario_id = $request->inventario_id;
        $venta_inventario->venta_id = $request->venta_id;
        $venta_inventario->precio = $request->precio;
        $venta_inventario->cantidad = $request->cantidad;
        $venta_inventario->save();
        return $venta_inventario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta_inventario  $venta_inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta_inventario $venta_inventario)
    {
        $venta_inventario->estado = 0;
        $venta_inventario->save();
    }
}
