<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negocio;

class NegocioController extends Controller
{

    public function crear(Request $request){

        // Validaciones para que la creacion sea exitosa'
        $request->validate([
            'nombre' => 'required|min:3',
            'direccion' => 'required|min:3',            
            'telefono' => 'required|min:10',
            'image' => 'required',            
            'id_usuario' => 'required'
        ]            
        );

        // Almacenar la imagen en el directorio 'public/img'
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img/business'), $imageName);
                                        
        
        // Crear una nueva instancia del modelo Usuario
        $negocio = new Negocio();
        
        // Asignar los datos del request a los atributos del modelo Usuario
        $negocio->nombre = $request->nombre;        
        $negocio->direccion = $request->direccion;
        $negocio->telefono = $request->telefono;
        $negocio->id_usuario = $request->id_usuario;
        $negocio->url_imagen = 'img/business/' . $imageName;

        // Guardar el nuevo usuario en la base de datos
        $negocio->save();
        
        // Redirigir a la ruta de inicio de sesión
        return redirect()->route('negocio');
    }

    public function obtenerNegociosPorUsuario($id_usuario){
        // Recuperar todos los registros de la tabla Negocio
        $negocios = Negocio::where('id_usuario', $id_usuario)->get();
        // Retornar los negocios que tiene el usuario
        return $negocios;        
    }    
}
