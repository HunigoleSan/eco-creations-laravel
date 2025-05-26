<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $fillable = [
        'codcli',
        'tipcomven',
        'metpagven',
        'estven',
        'fecven',
        'fecsalven'
    ];
    public function Cliente(){
        return $this->belongsTo(Cliente::class,'codcli');
    }

    public function productos(){
        return $this->belongsToMany(Producto::class,'detalle_ventas','codven','codprod')
            ->withPivot('cantidad','precio','subtotal')
            ->withTimestamps();
    }
}
