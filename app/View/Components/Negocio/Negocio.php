<?php

namespace App\View\Components\Negocio;

use App\Http\Controllers\NegocioController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Session;

class Negocio extends Component
{

    public $negocios;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->negocios = $this->obtenerNegocios();
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
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.negocio.negocio',[
            'negocios' => $this->negocios,
        ]);
    }
}
