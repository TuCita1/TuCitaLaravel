<?php

namespace App\Http\Controllers;

// Importar las clases necesarias
use Illuminate\Http\Request;
use App\Models\Negocio;

class NegocioController extends Controller
{
    // Método para crear un nuevo negocio
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
    
    // Método para actualizar un negocio existente
    public function actualizar(Request $request){

        // Validaciones para que la creacion sea exitosa'
        $request->validate([
            'id' => 'required',
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
        $negocio = Negocio::findOrFail($request->id);
        
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

    // Método para obtener los negocios del usuario
    public function obtenerNegociosPorUsuario($id_usuario){        
        $negocios = Negocio::where('id_usuario', $id_usuario)->get();        
        return $negocios;        
    }  
    
    // Método para obtener un negocio por su ID
    public function obtenerNegocioPorId($id){        
        $negocio = Negocio::where('id', $id)->first();        
        return $negocio;        
    } 
    
    // Método para eliminar un negocio
    public function eliminar($id){        
        $modelo = Negocio::findOrFail($id);        
        $modelo->delete();  
        return redirect()->route('negocio');      
    } 
}
