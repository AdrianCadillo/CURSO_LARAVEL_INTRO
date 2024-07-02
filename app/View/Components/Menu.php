<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public $Tipo;
    public function __construct($tiponav = "warning")
    {
        //

        if($tiponav === "negro"):
            $this->Tipo = "navbar-dark bg-dark";
        else:
            if($tiponav === "azul"):
               $this->Tipo = "navbar-light bg-primary";
            else:
                $this->Tipo = "navbar-light bg-light";
            endif;
        endif;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu');
    }
}
