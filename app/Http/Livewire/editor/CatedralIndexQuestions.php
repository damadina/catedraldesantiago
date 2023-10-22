<?php

namespace App\Http\Livewire\editor;

use Livewire\Component;
use App\Models\Catedral;
use App\Models\CatedralQuestion;
use Livewire\WithFileUploads;

class CatedralIndexQuestions extends Component
{
    use WithFileUploads;
    public $questions = null;
    public $elemento;
    public $question;

    public $open_edit = false;

    public $count = 0;

    protected $listeners = ['render' => 'render', 'deleteQuestion' => 'deleteQuestion'];

    protected $rules = [
        'question.titulo' => 'required',
        'question.orden' => 'required',
        'question.respuesta' => 'required',
    ];




    public function mount( Catedral $elemento) {
        $this->elemento = $elemento;

        $this->questions = $elemento->questions;
        $this->questions = new CatedralQuestion();
    }

    public function render()
    {
        $this->questions = $this->elemento->questions()->orderby('orden')->get();
        return view('livewire.editor.catedral-index-questions');
    }
    public function edit(CatedralQuestion $question) {
        $this->question = $question;
        $this->open_edit = true;
    }
    public function cancelar() {
        $this->reset(['open_edit']);
    }
    public function deleteQuestion(CatedralQuestion $question) {
        $question->delete();
    }

    public function update() {


        $this->validate();


        $this->question->save();
        $this->reset(['open_edit']);
    }
}
