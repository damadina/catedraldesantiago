<?php

namespace App\Http\Livewire\editor;
use App\Models\Catedral;
use App\Models\CatedralInfo;

use Livewire\Component;

class CatedralCreateInformations extends Component
{
    public $open = false;
    public $slug, $seoDescription, $titulo, $respuesta, $orden;
    public $elemento;



    protected $rules = [
        'slug' => 'required|unique:catedral_infos,slug',
        'seoDescription' => 'required',
        'titulo' => 'required',
        'respuesta' => 'required',
        'orden' => 'required',
    ];

    public function mount(Catedral $elemento) {
        $this->elemento = $elemento;
    }



    public function render()
    {
        return view('livewire.editor.catedral-create-informations');
    }

    public function save() {


        $this->validate();


        $information = CatedralInfo::create([
            'slug' =>$this->slug,
            'seoDescription' =>$this->seoDescription,
            'titulo' => $this->titulo,
            'orden' => $this->orden,
            'respuesta' => $this->respuesta,
        ]);

        $this->elemento->infos()->save($information);
        $this->reset(['open','titulo','orden','respuesta']);
       /*  $this->identificador = rand(); */
        $this->emitTO('editor.catedral-index-informations','render');
    }
    public function cancelar() {
        $this->reset(['open','titulo','orden','respuesta','slug','seoDescription']);
       /*  $this->identificador = rand(); */
    }
}
