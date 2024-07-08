<?php

namespace App\View\Components\Login;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\TipoUsuarioController;

class Login extends Component
{

    public $tipoUsuarios;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->tipoUsuarios = $this->obtenerTiposUsuario();
    }

    private function obtenerTiposUsuario(){
        $tipoUsuario = new TipoUsuarioController();
        $tipos = $tipoUsuario->obtenerTodos();
        unset($tipos[2]);
        return $tipos;        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.login.login',[
            'tipoUsuarios' => $this->tipoUsuarios,
        ]);        
    }
}
