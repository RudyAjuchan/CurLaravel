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
        return Caja_compra::with(['Caja','Compra'])->where('estado',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caja_compra = new Caja_compra();
        $caja_compra->caja_id = $request->caja_id;
        $caja_compra->compra_id = $request->compra_id;
        $caja_compra->monto = $request->monto;
        $caja_compra->save();
        return $caja_compra;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caja_compra  $caja_compra
     * @return \Illuminate\Http\Response
     */
    public function show(Caja_compra $caja_compra)
    {
        $caja_compra->caja = $caja_compra->Caja;
        $caja_compra->compra = $caja_compra->Compra;
        return $caja_compra;
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
        $caja_compra->caja_id = $request->caja_id;
        $caja_compra->compra_id = $request->compra_id;
        $caja_compra->monto = $request->monto;
        $caja_compra->save();
        return $caja_compra;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caja_compra  $caja_compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caja_compra $caja_compra)
    {
        $caja_compra->estado = 0;
        $caja_compra->save();        
    }
}
