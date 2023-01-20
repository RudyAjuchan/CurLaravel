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
        return Moneda_image::with(['Moneda','Image'])->where('estado',1)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $moneda_image = new Moneda_image();
        $moneda_image->moneda_id = $request->moneda_id;
        $moneda_image->image_id = $request->image_id;
        $moneda_image->save();
        return $moneda_image;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moneda_image  $moneda_image
     * @return \Illuminate\Http\Response
     */
    public function show(Moneda_image $moneda_image)
    {
        $moneda_image->moneda = $moneda_image->Moneda;
        $moneda_image->image = $moneda_image->Image;
        return $moneda_image;
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
        $moneda_image->moneda_id = $request->moneda_id;
        $moneda_image->image_id = $request->imagen_id;
        $moneda_image->save();
        return $moneda_image;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moneda_image  $moneda_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moneda_image $moneda_image)
    {
        $moneda_image->estado = 0;        
        $moneda_image->save();        
    }
}
