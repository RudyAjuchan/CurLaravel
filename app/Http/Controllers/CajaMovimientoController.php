<?php

namespace App\Http\Controllers;

use App\Models\Caja_movimiento;
use Illuminate\Http\Request;

class CajaMovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ['Caja movimientos'];
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
     * @param  \App\Models\Caja_movimiento  $caja_movimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Caja_movimiento $caja_movimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caja_movimiento  $caja_movimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caja_movimiento $caja_movimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caja_movimiento  $caja_movimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caja_movimiento $caja_movimiento)
    {
        //
    }
}
