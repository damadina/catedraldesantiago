<?php

namespace App\View\Components;

use Illuminate\View\Component;

class carouselTurismo extends Component
{
    public $turismo;
    public $idCarousel;

    public function __construct($turismo = null, $idCarousel = null)
    {
        $this->turismo = $turismo;
        $this->idCarousel = $idCarousel;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carousel-turismo');
    }
}
