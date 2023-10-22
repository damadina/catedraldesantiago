<?php

namespace App\Http\Livewire\editor;

use Livewire\Component;
use App\Models\Catedral;
use App\Models\CatedralInfo;
use Livewire\WithFileUploads;

class CatedralIndexInformations extends Component
{
    use WithFileUploads;
    public $informations = null;
    public $elemento;
    public $information;

    public $open_edit = false;

    public $count = 0;

    protected $listeners = ['render' => 'render', 'deleteInformation' => 'deleteInformation'];

    protected $rules = [
        'information.slug' => 'required',
        'information.seoDescription' => 'required',
        'information.titulo' => 'required',
        'information.orden' => 'required',
        'information.respuesta' => 'required',
    ];




    public function mount( Catedral $elemento) {
        $this->elemento = $elemento;

        $this->informations = $elemento->infos;
        $this->informations = new CatedralInfo();
    }

    public function render()
    {

        $this->informations = $this->elemento->infosandreports()->get();
        return view('livewire.editor.catedral-index-informations');
    }
    public function edit(CatedralInfo $information) {

        $this->information = $information;
        $this->open_edit = true;
    }
    public function cancelar() {
        $this->reset(['open_edit']);
    }
    public function deleteInformation(CatedralInfo $information) {
        $information->delete();
    }

    public function update() {


        $this->validate();


        $this->information->save();
        $this->reset(['open_edit']);
    }
}
