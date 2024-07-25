<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calificacion;

class CalificacionController extends Controller
{
    //
    public function crear(Request $request){

        // Validaciones para que la creacion sea exitosa'
        $request->validate([
            'valor' => 'required',
            'descripcion' => 'required',
            'id_servicio' => 'required',
            'id_usuario' => 'required',
        ]            
        );                                
        
        // Crear una nueva instancia del modelo Usuario
        $calificacion = new Calificacion();
        
        // Asignar los datos del request a los atributos del modelo Usuario
        $calificacion->valor = $request->valor;        
        $calificacion->descripcion = $request->descripcion;
        $calificacion->id_servicio = $request->id_servicio;
        $calificacion->id_usuario = $request->id_usuario;
        

        // Guardar el nuevo usuario en la base de datos
        $calificacion->save();
        
        // Redirigir a la ruta de inicio de sesión
        return redirect()->route('cliente');
    }

}
