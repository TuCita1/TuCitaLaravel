<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    public $timestamps = false;    
    protected $table = "reserva";

    public function negocio()
    {
        return $this->belongsTo(Negocio::class, 'id_negocio', 'id');
    }
}



