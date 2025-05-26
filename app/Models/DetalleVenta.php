<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    
    protected $fillable = [
        'codprod',
        'codven',
        'cantidad',
        'precio',
        'subtotal',
        'fecdetven'
    ];

    public function producto(){
        return $this->belongsTo(Producto::class,'codprod');
    }
    public function venta(){
        return $this->belongsTo(Venta::class,'codven');
    }
}
