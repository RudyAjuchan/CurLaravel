<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta_inventario extends Model
{
    use HasFactory;
    public function Inventario(){
        return $this->belongsTo(Inventario::class);
    }
    public function Venta(){
        return $this->belongsTo(Venta::class);
    }
}
