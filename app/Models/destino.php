<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destino extends Model
{
    use HasFactory;
    public function viaje(){ 

        return $this->belongsTo(Viaje::class); 

    } 
}
