<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alerta extends Component
{
    /**
     * Create a new component instance.
     */
    public $TipoDeAlerta;
    public function __construct($tipo = "info")
    {
        //
        switch($tipo):
            case "success": $this->TipoDeAlerta = "alert-success";break;
            case "error": $this->TipoDeAlerta = "alert-danger";break;
            default:
             $this->TipoDeAlerta = "alert-info";
            break;
        endswitch;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.alerta');
    }
}
