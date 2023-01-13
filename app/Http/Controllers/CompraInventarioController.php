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
        return ["Compra inventarios"];
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
     * @param  \App\Models\Compra_inventario  $compra_inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Compra_inventario $compra_inventario)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra_inventario  $compra_inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra_inventario $compra_inventario)
    {
        //
    }
}
