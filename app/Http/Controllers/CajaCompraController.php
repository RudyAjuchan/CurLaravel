<?php

namespace App\Http\Controllers;

use App\Models\Caja_compra;
use Illuminate\Http\Request;

class CajaCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ['Caja compras'];
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
     * @param  \App\Models\Caja_compra  $caja_compra
     * @return \Illuminate\Http\Response
     */
    public function show(Caja_compra $caja_compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caja_compra  $caja_compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caja_compra $caja_compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caja_compra  $caja_compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caja_compra $caja_compra)
    {
        //
    }
}
