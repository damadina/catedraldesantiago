<?php

namespace App\Http\Livewire\welcome;

use Livewire\Component;

class Preguntasfrecuentes extends Component
{
    public $open = false;
    public $questions;

    public function render()
    {
        return view('livewire.welcome.preguntasfrecuentes');
    }
    public function cancelar() {
        $this->reset(['open']);

    }
}
