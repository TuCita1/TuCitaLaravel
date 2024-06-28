<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoUsuario;

class TipoUsuarioController extends Controller
{
    public function getAll(){
        // Recuperar todos los registros de la tabla TipoUsuario
        $tipos = TipoUsuario::all();
        // Retornar la colección de tipos de usuario
        return $tipos;        
    }
}
