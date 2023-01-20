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
        return Caja_venta::with(['Caja','Venta'])->where('estado',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caja_venta = new Caja_venta();
        $caja_venta->caja_id = $request->caja_id;
        $caja_venta->venta_id = $request->venta_id;
        $caja_venta->monto = $request->monto;
        $caja_venta->save();
        return $caja_venta;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caja_venta  $caja_venta
     * @return \Illuminate\Http\Response
     */
    public function show(Caja_venta $caja_venta)
    {
        $caja_venta->caja = $caja_venta->Caja;
        $caja_venta->venta = $caja_venta->Venta;
        return $caja_venta;
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
        $caja_venta->caja_id = $request->caja_id;
        $caja_venta->venta_id = $request->venta_id;
        $caja_venta->monto = $request->monto;
        $caja_venta->save();
        return $caja_venta;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caja_venta  $caja_venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caja_venta $caja_venta)
    {
        $caja_venta->estado = 0;
        $caja_venta->save();
    }
}
