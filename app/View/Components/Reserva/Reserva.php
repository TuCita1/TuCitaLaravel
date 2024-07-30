<?php

namespace App\View\Components\Reserva;

use Closure;
use DateTime;
use DateInterval;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\ServicioController;

class Reserva extends Component
{
    public $servicio;
    public $fechaInicio;
    public $fechaFin;
    public $horarios;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    public function obtenerServicio($id)
    {
        $controller = new ServicioController();
        $this->servicio = $controller->obtenerServicioPorIdConReserva($id);
    }

    public function obtenerRangoFechas()
    {
        $mañana = new DateTime();
        $mañana->modify('+1 day');
        $this->fechaInicio = $mañana->format('Y-m-d');

        $unMesDespues = clone $mañana;
        $unMesDespues->modify('+1 month');

        $this->fechaFin = $unMesDespues->format('Y-m-d');
    }


    public function crearHorarios()
    {
        $h_salida = new DateTime($this->servicio->hora_salida);
        $h_inicio = new DateTime($this->servicio->hora_entrada);
        //$h_fin = $this->obtenerHoraUltimoServicio();
        $horasTrabajo = $this->diferenciaDeHoras($h_inicio, $h_salida);

        for ($hora = 0; $hora <= $horasTrabajo; $hora++) {
            $horaValor = $this->sumarHorasFecha(clone $h_inicio, $hora);
            for ($turno = 0; $turno < $this->servicio->servicios_simultaneos; $turno++) {
                $this->horarios[$hora][$turno] = array('hora' => $horaValor->format('H:i'), 'libre' => true);
            }
        }
    }

    /*public function obtenerHoraUltimoServicio()
    {
        $dateTime = new DateTime($this->servicio->hora_salida);
        $dateTime->sub(new DateInterval('PT' . $this->servicio->duracion . 'H'));
        return $dateTime;
    }*/

    public function sumarHorasFecha($hora, $cantidadHoras)
    {
        $intervalo = new DateInterval('PT' . $cantidadHoras . 'H');
        $hora->add($intervalo);
        return $hora;
    }


    public function diferenciaDeHoras($horaInicio, $horaFin)
    {
        $diferencia = $horaInicio->diff($horaFin);
        $horas = $diferencia->h;
        return $horas;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render($id = 0): View|Closure|string
    {
        $this->obtenerServicio($id);
        $this->obtenerRangoFechas();
        $this->crearHorarios();
        return view('components.reserva.reserva', [
            'id' => $id,
            'servicio' => $this->servicio,
            'fechaInicio' => $this->fechaInicio,
            'fechaFin' => $this->fechaFin,
            'horarios' => $this->horarios
        ]);
    }
}
