<?php

namespace App\Http\Controllers;

use App\Models\compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ['compras'];
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
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function show(compras $compras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compras $compras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy(compras $compras)
    {
        //
    }
}
