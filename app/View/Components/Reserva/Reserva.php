<?php

namespace App\View\Components\Reserva;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\ServicioController;

class Reserva extends Component
{
    public $servicio;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function obtenerServicio($id){
        $controller = new ServicioController();                        
        $this->servicio = $controller->obtenerServicioPorIdConReserva($id);                     
    }    

    /**
     * Get the view / contents that represent the component.
     */
    public function render($id=0): View|Closure|string
    {
        $this->obtenerServicio($id);
        return view('components.reserva.reserva',[
            'id'=>$id,
            'servicio'=>$this->servicio,
        ]);
    }
}
