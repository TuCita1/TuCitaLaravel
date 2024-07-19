<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Negocio;

class ServicioController extends Controller
{

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

    public function obtenerServiciosPorUsuario($id_usuario)
    {
        $negocios_id = Negocio::where('id_usuario', $id_usuario)->get()->pluck('id');
        $servicios = Servicio::whereIn('id_negocio', $negocios_id)->get();
        return $servicios;
    }

    public function obtenerServicioPorId($id)
    {
        $servicio = Servicio::where('id', $id)->first();
        return $servicio;
    }

    public function obtenerServicioPorIdConReserva($id)
    {
        $servicio = Servicio::with('reserva')->where('id', $id)->first();        
        return $servicio;
    }

    public function obtenerServicioPorTipo($idTipoServicio)
    {
        $servicio = Servicio::with('negocio')->where('id_tipo_servicio', $idTipoServicio)->get();
        return $servicio;
    }

    public function eliminar($id)
    {
        $modelo = Servicio::findOrFail($id);
        $modelo->delete();
        return redirect()->route('servicio');
    }
}
