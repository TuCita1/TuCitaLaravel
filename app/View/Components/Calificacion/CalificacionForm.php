<?php

namespace App\View\Components\Calificacion;

use App\Http\Controllers\CalificacionController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CalificacionForm extends Component
{
    public $calificacion;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.calificacion.calificacion-form');
    }
}
