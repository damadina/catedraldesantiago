<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Catedral;
use App\Models\CatedralFoto;
use Livewire\WithPagination;

class Fototeca extends Component
{
    use WithPagination;
    public $elementos;
    public $elementoSeleccionado ="Todas las Fotografías";
    private $elemento;

    public function mount() {
        $this->elementos = Catedral::where('id','!=',1)
        ->where('id','<',46)
        ->orderBy('categoria')
        ->get();
    }


    public function render()
    {
        if($this->elementoSeleccionado == 'Todas las Fotografías') {
            $fotos = CatedralFoto::where('catedral_id','<',46)
            ->where('catedral_id','!=',1)
            ->orderby('catedral_id')->paginate(40);
        } else {
            $fotos = $this->elemento->fotos()->paginate(40);
        }



        return view('livewire.fototeca',compact('fotos'));
    }

    public function limpiar_page() {
        $this->resetPage();
    }

    public function updatedelementoSeleccionado($idElemento) {

        $id = intval($idElemento);
        $this->elemento = Catedral::where('id',$id)->first();
        $this->elementoSeleccionado = $idElemento;
        $this->limpiar_page();
    }
}
