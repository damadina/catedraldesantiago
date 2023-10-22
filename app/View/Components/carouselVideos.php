<?php

namespace App\View\Components;

use Illuminate\View\Component;

class carouselVideos extends Component
{
    public $videos;
    public $idCarousel;
    public $elementoId;
    public function __construct($videos = null, $idCarousel = null, $elementoId)
    {
        $this->videos = $videos;
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
        return view('components.carousel-videos');
    }
}
