<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    protected $fillable =  [
        'nombre',
        'apellido',
        'celular',
        'dni',
        'distrito',
        'direccion'
    ];

    public function Ventas(){
        return $this->hasMany(Venta::class,'codcli');
    }
}
