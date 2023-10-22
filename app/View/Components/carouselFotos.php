<?php

namespace App\View\Components;

use Illuminate\View\Component;

class carouselFotos extends Component
{
    public $fotos;
    public $idCarousel;
    public $elementoId;
    public function __construct($fotos = null, $idCarousel = null, $elementoId)
    {
        $this->fotos = $fotos;
        $this->idCarousel = $idCarousel;
        $this->elementoId = $elementoId;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carousel-fotos');
    }
}
