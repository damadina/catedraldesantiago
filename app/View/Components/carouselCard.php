<?php

namespace App\View\Components;

use Illuminate\View\Component;

class carouselCard extends Component
{
    public $cards;
    public $idCarousel;
    public function __construct($cards = null, $idCarousel = null)
    {
        $this->cards = $cards;
        $this->idCarousel = $idCarousel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carousel-card');
    }
}
