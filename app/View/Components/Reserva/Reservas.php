<?php

namespace App\View\Components\Reserva;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ReservaController;

class Reservas extends Component
{
    public $reservas;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->obtenerReservas();
    }

    public function obtenerReservas()
    {
        $controller = new ReservaController();
        $id = Session::get('id');
        $this->reservas = $controller->obtenerReservasPorUsuario($id);        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reserva.reservas',[
            'reservas' => $this->reservas
        ]);
    }
}
