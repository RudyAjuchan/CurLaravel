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
        return ["Venta inventario"];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta_inventario  $venta_inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Venta_inventario $venta_inventario)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta_inventario  $venta_inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta_inventario $venta_inventario)
    {
        //
    }
}
