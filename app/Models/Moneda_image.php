<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneda_image extends Model
{
    use HasFactory;
    public function Moneda(){
        return $this->belongsTo(Moneda::class);
    }
    public function Image(){
        return $this->belongsTo(Image::class);
    }
}
