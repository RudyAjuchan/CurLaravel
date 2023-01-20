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
        return Caja_movimiento::with(['Caja'])->where('estado',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caja_movimiento = new Caja_movimiento();
        $caja_movimiento->caja_id = $request->caja_id;
        $caja_movimiento->tipo = $request->tipo;
        $caja_movimiento->monto = $request->monto;
        $caja_movimiento->motivo = $request->motivo;
        $caja_movimiento->save();
        return $caja_movimiento;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caja_movimiento  $caja_movimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Caja_movimiento $caja_movimiento)
    {
        $caja_movimiento->Caja;
        return $caja_movimiento;
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
        $caja_movimiento->caja_id = $request->caja_id;
        $caja_movimiento->tipo = $request->tipo;
        $caja_movimiento->monto = $request->monto;
        $caja_movimiento->motivo = $request->motivo;
        $caja_movimiento->save();
        return $caja_movimiento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caja_movimiento  $caja_movimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caja_movimiento $caja_movimiento)
    {
        $caja_movimiento->estado = 0;
        $caja_movimiento->save();
    }
}
