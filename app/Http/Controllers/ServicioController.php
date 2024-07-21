<?php

namespace App\Http\Controllers;

// Importar las clases necesarias
use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Negocio;

class ServicioController extends Controller
{

    // Método para crear un nuevo servicio
    public function crear(Request $request)
    {

        // Validaciones para que la creacion sea exitosa'
        $request->validate(
            [
                'nombre' => 'required|min:3',
                'descripcion' => 'required',
                'valor' => 'required',
                'duracion' => 'required',
                'servicios_simultaneos' => 'required',
                'hora_entrada' => 'required',
                'hora_salida' => 'required',                
                'image' => 'required',
                'id_negocio' => 'required',
                'id_tipo_servicio' => 'required'
            ]
        );

        // Almacenar la imagen en el directorio 'public/img'
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img/service'), $imageName);


        // Crear una nueva instancia del modelo Usuario
        $servicio = new Servicio();

        // Asignar los datos del request a los atributos del modelo Usuario
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->valor = $request->valor;
        $servicio->duracion = $request->duracion;
        $servicio->servicios_simultaneos = $request->servicios_simultaneos;
        $servicio->hora_entrada = $request->hora_entrada;
        $servicio->hora_salida = $request->hora_salida;
        $servicio->id_negocio = $request->id_negocio;
        $servicio->id_tipo_servicio = $request->id_tipo_servicio;        
        $servicio->url_imagen = 'img/service/' . $imageName;

        // Guardar el nuevo usuario en la base de datos
        $servicio->save();

        // Redirigir a la ruta de inicio de sesión
        return redirect()->route('servicio');
    }

    // Método para actualizar un servicio existente
    public function actualizar(Request $request)
    {

        // Validaciones para que la creacion sea exitosa'
        $request->validate(
            [
                'id' => 'required',
                'nombre' => 'required|min:3',
                'descripcion' => 'required',
                'valor' => 'required',
                'duracion' => 'required',
                'servicios_simultaneos' => 'required',
                'hora_entrada' => 'required',
                'hora_salida' => 'required',
                'image' => 'required',
                'id_negocio' => 'required',
                'id_tipo_servicio' => 'required'
            ]
        );

        // Almacenar la imagen en el directorio 'public/img'
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img/service'), $imageName);


        // Crear una nueva instancia del modelo Usuario
        $servicio = Servicio::findOrFail($request->id);

        // Asignar los datos del request a los atributos del modelo Usuario        
        $servicio->nombre = $request->nombre;
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->valor = $request->valor;
        $servicio->duracion = $request->duracion;
        $servicio->servicios_simultaneos = $request->servicios_simultaneos;
        $servicio->hora_entrada = $request->hora_entrada;
        $servicio->hora_salida = $request->hora_salida;
        $servicio->id_negocio = $request->id_negocio;
        $servicio->id_tipo_servicio = $request->id_tipo_servicio;        
        $servicio->url_imagen = 'img/service/' . $imageName;

        // Guardar el nuevo usuario en la base de datos
        $servicio->save();

        // Redirigir a la ruta de inicio de sesión
        return redirect()->route('servicio');
    }

    // Método para obtener todos los servicios de un usuario específico
    public function obtenerServiciosPorUsuario($id_usuario)
    {
        // Obtener los IDs de los negocios del usuario
        $negocios_id = Negocio::where('id_usuario', $id_usuario)->get()->pluck('id');
        // Obtener los servicios que pertenecen a esos negocios
        $servicios = Servicio::whereIn('id_negocio', $negocios_id)->get();
        return $servicios;
    }

    // Método para obtener un servicio por su ID
    public function obtenerServicioPorId($id)
    {
        // Obtener el servicio por su ID
        $servicio = Servicio::where('id', $id)->first();
        return $servicio;
    }

    // Método para obtener un servicio por su ID junto con sus reservas
    public function obtenerServicioPorIdConReserva($id)
    {
        // Obtener el servicio por su ID incluyendo sus reservas
        $servicio = Servicio::with('reserva')->where('id', $id)->first();        
        return $servicio;
    }

    // Método para obtener servicios por tipo de servicio
    public function obtenerServicioPorTipo($idTipoServicio)
    {
        // Obtener los servicios por tipo de servicio incluyendo los negocios a los que pertenecen
        $servicio = Servicio::with('negocio')->where('id_tipo_servicio', $idTipoServicio)->get();
        return $servicio;
    }

    // Método para eliminar un servicio
    public function eliminar($id)
    {
        // Buscar el servicio por ID y eliminarlo
        $modelo = Servicio::findOrFail($id);
        $modelo->delete();
        return redirect()->route('servicio');
    }
}
