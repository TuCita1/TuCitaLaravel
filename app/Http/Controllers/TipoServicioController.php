<?php

namespace App\Http\Controllers;

// Importar las clases necesarias
use Illuminate\Http\Request;
use App\Models\TipoServicio;

class TipoServicioController extends Controller
{
    // Método para obtener todos los tipos de servicio
    public function obtenerTodos(){
        // Recuperar todos los registros de la tabla TipoUsuario
        $tipos = TipoServicio::all();
        // Retornar la colección de tipos de usuario
        return $tipos;        
    }
}
