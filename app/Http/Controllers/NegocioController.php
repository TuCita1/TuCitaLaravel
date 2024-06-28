<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negocio;

class NegocioController extends Controller
{
    public function crear(Request $request){
        // Almacenar la imagen en el directorio 'public/img'

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img/business'), $imageName);
                                        
        
        // Crear una nueva instancia del modelo Usuario
        $negocio = new Negocio();
        
        // Asignar los datos del request a los atributos del modelo Usuario
        $negocio->nombre = $request->nombre;
        $negocio->direccion = $request->direccion;
        $negocio->telefono = $request->telefono;
        $negocio->url_imagen = 'img/business/' . $imageName;

        // Guardar el nuevo usuario en la base de datos
        $negocio->save();
        
        // Redirigir a la ruta de inicio de sesión
        return redirect()->route('home');
    }
}
