<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viaje extends Model
{
    use HasFactory;
    public function viajero(){ 

        return $this->belongsTo(Viajero::class); 

    } 

    public function destinos(){ 

        return $this->hasMany(Destino::class); 

    } 

    public function origenes(){ 

        return $this->hasMany(Origen::class); 

    } 
}
