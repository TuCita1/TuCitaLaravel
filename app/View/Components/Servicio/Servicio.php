<?php

namespace App\View\Components\Servicio;

use App\Http\Controllers\ServicioController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class Servicio extends Component
{
    public $servicios;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->servicios = $this->obtenerServicios();
    }

    /**
     * Obtiene los servicios creados previamente por el usuario
     */
    private function obtenerServicios(){
        $negocio = new ServicioController();
        $id_usuario = Session::get('id');
                
        $servicios = $negocio->obtenerServiciosPorUsuario($id_usuario);        
        return $servicios;        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.servicio.servicio',[
            'servicios' => $this->servicios,
        ]);
    }
}
