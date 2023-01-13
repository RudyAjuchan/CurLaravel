<?php

namespace App\Http\Controllers;

use App\Models\Moneda_image;
use Illuminate\Http\Request;

class MonedaImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ['Moneda imagen'];
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
     * @param  \App\Models\Moneda_image  $moneda_image
     * @return \Illuminate\Http\Response
     */
    public function show(Moneda_image $moneda_image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moneda_image  $moneda_image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moneda_image $moneda_image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moneda_image  $moneda_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moneda_image $moneda_image)
    {
        //
    }
}
