<?php

namespace App\Http\Controllers;

use App\Models\Compra_inventario;
use Illuminate\Http\Request;

class CompraInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Compra_inventario::with(['Inventario','Compra'])->where('estado',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compra_inventario = new Compra_inventario();
        $compra_inventario->inventario_id = $request->inventario_id;
        $compra_inventario->compra_id = $request->compra_id;
        $compra_inventario->precio = $request->precio;
        $compra_inventario->cantidad = $request->cantidad;
        $compra_inventario->save();
        return $compra_inventario;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compra_inventario  $compra_inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Compra_inventario $compra_inventario)
    {
        $compra_inventario->inventario = $compra_inventario->Inventario;
        $compra_inventario->compra = $compra_inventario->Compra;
        return $compra_inventario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compra_inventario  $compra_inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra_inventario $compra_inventario)
    {
        $compra_inventario->inventario_id = $request->inventario_id;
        $compra_inventario->compra_id = $request->compra_id;
        $compra_inventario->precio = $request->precio;
        $compra_inventario->cantidad = $request->cantidad;
        $compra_inventario->save();
        return $compra_inventario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra_inventario  $compra_inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra_inventario $compra_inventario)
    {
        $compra_inventario->estado = 0;
        $compra_inventario->save();
    }
}
