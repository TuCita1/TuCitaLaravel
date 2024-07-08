<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoServicio;

class TipoServicioController extends Controller
{
    public function obtenerTodos(){
        // Recuperar todos los registros de la tabla TipoUsuario
        $tipos = TipoServicio::all();
        // Retornar la colección de tipos de usuario
        return $tipos;        
    }
}
