<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ReservaController extends Controller
{

    // Método para crear una nueva reserva
    public function crear(Request $request)
    {

        // Validaciones para que la creacion sea exitosa'
        $request->validate(
            [
                'fecha' => 'required',
                'id_servicio' => 'required',
                'id_usuario' => 'required',                
            ]
        );        


        // Crear una nueva instancia del modelo Usuario
        $reserva = new Reserva();

        // Asignar los datos del request a los atributos del modelo Usuario
        $reserva->fecha = $request->fecha;
        $reserva->estado = 0;
        $reserva->id_servicio = $request->id_servicio;
        $reserva->id_usuario = $request->id_usuario;

        // Guardar el nuevo usuario en la base de datos
        $reserva->save();

        // Redirigir a la ruta de inicio de sesión
        return redirect()->route('reservas');
    }

    // Método para obtener todas las reservas que tiene un servicio en una fecha expecifica
    public function obtenerReservasPorServicioYFecha($id_servicio, $fecha)
    {
        $inicioDia = Carbon::parse($fecha)->startOfDay();
        $finDia = Carbon::parse($fecha)->endOfDay();

        // Obtener las reservas que se han hecho en un dia para un servicio
        $reserva = Reserva::where('id_servicio', $id_servicio)->whereBetween('fecha', [$inicioDia, $finDia])->get();

        // Retorna las reservas
        return $reserva;
    }

    // Método para obtener todas las reservas por usuario
    public function obtenerReservasPorUsuario($id_usuario)
    {        
        // Obtener las reservas que se han hecho en un dia para un servicio
        $reservas = Reserva::with('servicio')->where('id_usuario', $id_usuario)->orderBy('fecha', 'desc')->get();

        // Retorna las reservas
        return $reservas;
    }
}
