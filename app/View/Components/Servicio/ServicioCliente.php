<?php

namespace App\View\Components\Servicio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\ServicioController;

class ServicioCliente extends Component
{
    public $servicios;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
    * Obtiene los servicios que existen por su tipo
    */
    private function obtenerServicios($id_tipo){
        $controller = new ServicioController();                        
        $this->servicios = $controller->obtenerServicioPorTipo($id_tipo);                        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render($id_tipo=0): View|Closure|string
    {
        $this->obtenerServicios($id_tipo);
        return view('components.servicio.servicio-cliente',[
            'id_tipo'=>$id_tipo,
            'servicios'=>$this->servicios,
        ]);
    }
}
