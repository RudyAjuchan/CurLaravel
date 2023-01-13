<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja_compra extends Model
{
    use HasFactory;
    public function Caja(){
        return $this->belongTo(Caja::class);
    }
    public function Compra(){
        return $this->belongTo(compras::class);
    }
}
