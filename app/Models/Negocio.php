<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    public $timestamps = false;    
    protected $table = "negocio";

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'id_negocio', 'id');
    }    

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id');
    }
}
