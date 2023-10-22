<?php

namespace App\View\Components;

use Illuminate\View\Component;

class partesCatedral extends Component
{
    public $elementos;
    public function __construct($elementos)
    {
        $this->elementos = $elementos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partes-catedral');
    }
}
