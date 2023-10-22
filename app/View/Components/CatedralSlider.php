<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CatedralSlider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $fotos;

    public function __construct($fotos)
    {
        $this->fotos = $fotos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.catedral-slider');
    }
}
