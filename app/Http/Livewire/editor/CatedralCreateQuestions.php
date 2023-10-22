<?php

namespace App\Http\Livewire\editor;
use App\Models\Catedral;
use App\Models\CatedralQuestion;

use Livewire\Component;

class CatedralCreateQuestions extends Component
{
    public $open = false;
    public $titulo, $respuesta, $orden;
    public $elemento;


    protected $rules = [
        'titulo' => 'required',
        'respuesta' => 'required',
        'orden' => 'required',
    ];

    public function mount(Catedral $elemento) {
        $this->elemento = $elemento;
    }



    public function render()
    {
        return view('livewire.editor.catedral-create-questions');
    }

    public function save() {


        $this->validate();


        $question = CatedralQuestion::create([
            'titulo' => $this->titulo,
            'orden' => $this->orden,
            'respuesta' => $this->respuesta,
        ]);

        $this->elemento->questions()->save($question);
        $this->reset(['open','titulo','orden','respuesta']);
        $this->identificador = rand();
        $this->emitTO('editor.catedral-index-questions','render');
    }
    public function cancelar() {
        $this->reset(['open','titulo','orden','respuesta']);
        $this->identificador = rand();
    }
}
