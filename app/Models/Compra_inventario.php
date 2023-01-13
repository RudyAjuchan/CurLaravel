<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra_inventario extends Model
{
    use HasFactory;
    public function Inventario(){
        return $this->belongTo(Inventario::class);
    }
    public function Compra(){
        return $this->belongTo(compras::class);
    }
}
