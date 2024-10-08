<?php

namespace App\View\Components\Cliente;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\TipoServicioController;

class ClienteServicios extends Component
{
    public $tiposServicio;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->tiposServicio = $this->obtenerTiposServicio();
    }

    public function obtenerTiposServicio()
    {
        $tipoServicio = new TipoServicioController();
        return $tipoServicio->obtenerTodos();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cliente.cliente-servicios',[
            'tipoServicios' => $this->tiposServicio,
        ]);
    }
}
