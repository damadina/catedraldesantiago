<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cardVideo extends Component
{
    public $item;
    public function __construct($item = null)
    {
        $this->item = $item;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-video');
    }
}
