<?php

namespace App\Http\Livewire\Welcome;

use Livewire\Component;
use App\Models\Catedral;

class CatedralLikes extends Component
{
    public $likes;
    public $elemento;

    public function mount(Catedral $elemento) {
        $this->elemento = $elemento;
        $this->likes = $elemento->likes;
    }
    public function render()
    {
        return view('livewire.welcome.catedral-likes');
    }

    public function like() {
        $this->likes +=1;
        $this->elemento->likes = $this->likes;
        $this->elemento->update();
    }
}
