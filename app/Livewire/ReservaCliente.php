<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\ReservaController;
use DateTime;

class ReservaCliente extends Component
{
    public $fechaInicio; // fecha inicio en el select "heredado"
    public $fechaFin; // fecha final en el select "heredado"
    public $servicio; // servicio seleccionado "heredado"
    public $id; // id del servicio "heredado"

    public $fechaSeleccionada; // fecha seleccionada por el usuario
    public $fechaSeleccionadaString;
    public $horarios; // matriz con el listado de horarios

    public $reservas; // Listado de reservas consultadas
    public $horariosDisponibles = array();

    public function seleccionarFecha($fecha)
    {
        $this->consultarReservas($fecha);
        $this->asignarReservas();
        $this->fechaSeleccionada = new DateTime($fecha);
        $this->crearListadoDeHorariosDisponibles();

    }

    public function seleccionarHora($hora)
    {        
        $this->fechaSeleccionada->setTime((int)substr($hora, 0, 2), (int)substr($hora, 3, 2));        
        $this->fechaSeleccionadaString = $this->fechaSeleccionada->format('Y-m-d H:i:s');
    }
    

    public function consultarReservas($fecha)
    {
        $controller = new ReservaController();
        $this->reservas = $controller->obtenerReservasPorServicioYFecha($this->id, $fecha);
    }

    public function asignarReservas()
    {
        foreach ($this->reservas as $reserva) {
            $this->ocuparEspaciosReserva($reserva);
        }
    }

    public function ocuparEspaciosReserva($reserva)
    {
        $cupos = $this->servicio->servicios_simultaneos;
        for ($cupo = 0; $cupo <= $cupos; $cupo++) {
            if ($this->ocuparEspaciosPorColumna($cupo, $reserva)) {
                return null;
            }
        }
        return null;
    }

    public function crearListadoDeHorariosDisponibles()
    {
        $this->horariosDisponibles = array();
        $duracion = $this->servicio->duracion;
        $horas = count($this->horarios);
        $cupos = $this->servicio->servicios_simultaneos;        
        for ($hora = 0; $hora < $horas; $hora++) {
            for ($cupo = 0; $cupo < $cupos; $cupo++) {                
                if (
                    $this->validarEspaciosConsecutivos($hora, $cupo, $duracion)
                    && !in_array($this->horarios[$hora][$cupo]["hora"], $this->horariosDisponibles)
                ) {
                    array_push($this->horariosDisponibles, $this->horarios[$hora][$cupo]["hora"]);
                }
            }
        }   
        $this->eliminarUltimasHoras();             
    }

    public function eliminarUltimasHoras(){
        $duracion = $this->servicio->duracion - 1;
        if (count($this->horariosDisponibles) > $duracion) {            
            $this->horariosDisponibles = array_slice($this->horariosDisponibles, 0, -$duracion);
        } else {            
            $this->horariosDisponibles = [];
        }
    }

    public function ocuparEspaciosPorColumna($cupo, $reserva)
    {
        $horas = count($this->horarios);

        for ($hora = 0; $hora < $horas; $hora++) {
            $horaReserva = new DateTime($reserva->fecha);
            $horaAgenda = $this->horarios[$hora][$cupo]["hora"];

            if ($horaReserva->format('H:i') == $horaAgenda && $this->horarios[$hora][$cupo]["libre"] == true) {
                $duracion = $this->servicio->duracion;
                return $this->ocuparEspaciosConsecutivos($hora, $cupo, $duracion);
            }
        }
    }

    public function ocuparEspaciosConsecutivos($hora, $cupo, $duracion)
    {
        $horas = count($this->horarios);
        if ($this->validarEspaciosConsecutivos($hora, $cupo, $duracion)) {
            $pos_hora = $hora;
            for ($i = 0; ($i < $duracion && $pos_hora < $horas); $i++) {
                $this->horarios[$pos_hora][$cupo]["libre"] = false;
                $pos_hora = $pos_hora + 1;
            }
            return true;
        }
        return false;
    }

    public function validarEspaciosConsecutivos($hora, $cupo, $duracion)
    {
        $pos_hora = $hora;
        $horas = count($this->horarios);
        for ($i = 0; ($i < $duracion && $pos_hora < $horas); $i++) {
            if ($this->horarios[$pos_hora][$cupo]["libre"] == false) {
                return false;
            }
            $pos_hora = $pos_hora + 1;
        }
        return true;
    }

    public function render()
    {
        return view('livewire.reserva-cliente');
    }
}
