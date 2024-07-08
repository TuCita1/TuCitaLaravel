<?php

namespace App\View\Components\Negocio;

use App\Http\Controllers\NegocioController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NegocioForm extends Component
{    
    public $negocio;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {        
    }

    public function validarNegocio($id){
        $controller = new NegocioController();                        
        $this->negocio = $controller->obtenerNegocioPorId($id);             
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render($id=0): View|Closure|string
    {
        $this->validarNegocio($id);
        return view('components.negocio.negocio-form',[
            'id'=>$id,
            'negocio'=>$this->negocio,
        ]);
    }
}
