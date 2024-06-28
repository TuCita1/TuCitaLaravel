<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;
    public $timestamps = false;    
    protected $table = "tipo_usuario";

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_tipo_usuario', 'id');
    }
}
