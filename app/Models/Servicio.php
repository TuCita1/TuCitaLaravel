<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    public $timestamps = false;    
    protected $table = "servicio";

    public function negocio()
    {
        return $this->belongsTo(Negocio::class, 'id_negocio', 'id');
    }

    public function reserva()
    {
        return $this->hasMany(Reserva::class, 'id_servicio', 'id');
    }
}
