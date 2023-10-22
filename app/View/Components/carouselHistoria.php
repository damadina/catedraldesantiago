<?php

namespace App\View\Components;

use Illuminate\View\Component;

class carouselHistoria extends Component
{
    public $historia;
    public $idCarousel;
    public $elementoId;
    public function __construct($historia = null, $idCarousel = null)
    {
        $this->historia = $historia;
        $this->idCarousel = $idCarousel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carousel-historia');
    }
}
