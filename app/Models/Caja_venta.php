<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja_venta extends Model
{
    use HasFactory;
    public function Caja(){
        return $this->belongTo(Caja::class);
    }
    public function Venta(){
        return $this->belongTo(Venta::class);
    }
}
