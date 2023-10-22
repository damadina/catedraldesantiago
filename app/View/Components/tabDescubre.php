<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tabDescubre extends Component
{
    public $fachadas;
    public $capillas;
    public $otros;
    public $museo;


     public function __construct($fachadas, $capillas, $otros, $museo)
    {
       $this->fachadas = $fachadas;
       $this->capillas =$capillas;
       $this->otros = $otros;
       $this->museo = $museo;
    }


    public function render()
    {
        return view('components.tab-descubre');
    }
}
