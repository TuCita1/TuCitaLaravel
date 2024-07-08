<?php

namespace App\View\Components\Servicio;

use App\Http\Controllers\ServicioController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\TipoServicioController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class ServicioForm extends Component
{    
    public $servicio;
    public $negocios;
    public $tiposServicio;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {        
        $this->negocios = $this->obtenerNegocios();
        $this->tiposServicio = $this->obtenerTiposServicio();
    }

    public function validarServicio($id){
        $controller = new ServicioController();                        
        $this->servicio = $controller->obtenerServicioPorId($id);                     
    }

    /**
    * Obtiene los negocios creados previamente por el usuario
    */
    private function obtenerNegocios(){
        $negocio = new NegocioController();
        $id_usuario = Session::get('id');
                
        $negocios = $negocio->obtenerNegociosPorUsuario($id_usuario);        
        return $negocios;        
    }

        /**
    * Obtiene los negocios creados previamente por el usuario
    */
    private function obtenerTiposServicio(){
        $tipoServicios = new TipoServicioController();        
                
        $tipoServicios = $tipoServicios->obtenerTodos();        
        return $tipoServicios;        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render($id=0): View|Closure|string
    {
        $this->validarServicio($id);
        return view('components.servicio.servicio-form',[
            'id'=>$id,
            'servicio'=>$this->servicio,
            'negocios'=>$this->negocios,
            'tiposServicio'=>$this->tiposServicio,
        ]);
    }
}
