<?php

namespace App\Http\Controllers;

use App\Models\Caja_venta;
use Illuminate\Http\Request;

class CajaVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ["Caja venta"];
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
     * @param  \App\Models\Caja_venta  $caja_venta
     * @return \Illuminate\Http\Response
     */
    public function show(Caja_venta $caja_venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caja_venta  $caja_venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caja_venta $caja_venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caja_venta  $caja_venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caja_venta $caja_venta)
    {
        //
    }
}
