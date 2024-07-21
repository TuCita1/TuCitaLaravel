<?php

namespace App\Http\Controllers;

// Importar las clases necesarias
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    // Método para crear un nuevo usuario
    public function crear(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'apellido' => 'required|min:3',
            'email' => 'required|email',
            'telefono' => 'required|min:10',
            'contraseña' => 'required',            
            'id_tipo_usuario' => 'required',
            'image' => 'required'
        ]            
        );
        
        // Almacenar la imagen en el directorio 'public/img'
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img/user'), $imageName);


        // Crear una nueva instancia del modelo Usuario
        $usuario = new Usuario();

        // Asignar los datos del request a los atributos del modelo Usuario
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->contraseña = $request->contraseña;
        $usuario->url_imagen = 'img/user/' . $imageName;
        $usuario->id_tipo_usuario = $request->id_tipo_usuario;

        // Guardar el nuevo usuario en la base de datos
        $usuario->save();

        // Redirigir a la ruta de inicio de sesión
        return redirect()->route('home');
    }

    // Método para ingresar un usuario existente
    public function ingresar(Request $request)
    {
        // Validaciones para asegurar que los datos del request son correctos
        $request->validate([
            'email' => 'required|email',            
            'contraseña' => 'required',                        
        ]            
        );
        // Obtener el correo y la contraseña del request
        $email = $request->email;
        $contraseña = $request->contraseña;

        // Buscar un usuario que coincida con el correo y la contraseña proporcionados
        $usuario = Usuario::with('tipoUsuario')
            ->where('email', $email)
            ->where('contraseña', $contraseña)
            ->first();        

        // Si se encuentra un usuario
        if ($usuario) {            
            // Redirigir a la ruta correspondiente según el tipo de usuario
            if ($usuario->id_tipo_usuario == 1) {
                
                $this->storage($request, $usuario);                                
                return redirect()->route('cliente');

            } else if ($usuario->id_tipo_usuario == 2) {
                
                $this->storage($request, $usuario);                
                return redirect()->route('proveedor');
            }            
        }

        // Si no se encuentra el usuario o las credenciales no son válidas, redirigir a la ruta de inicio de sesión
        return redirect()->route('login');
    }

    // Método privado para almacenar la sesión del usuario
    private function storage (Request $request, Usuario $usuario){
        // Almacenar los datos del usuario en la sesión
        $request->session()->put("id", $usuario->id);
        $request->session()->put("nombre", $usuario->nombre);
        $request->session()->put("email", $usuario->email);
        $request->session()->put("url", $usuario->url_imagen);
    }
}
