<?php

namespace App\Http\Controllers;

// Importar las clases necesarias
use Illuminate\Http\Request;
use App\Models\TipoUsuario;

class TipoUsuarioController extends Controller
{
    public function obtenerTodos(){
        // Recuperar todos los registros de la tabla TipoUsuario
        $tipos = TipoUsuario::all();
        // Retornar la colección de tipos de usuario
        return $tipos;        
    }
}
