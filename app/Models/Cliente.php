<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    protected $fillable =  [
        'nomcli',
        'apecli',
        'dnicli',
        'celcli',
        'ciudad',
        'distrito',
        'dircli'
    ];

    public function Ventas(){
        return $this->hasMany(Venta::class,'codcli');
    }
}
