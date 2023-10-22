<?php

namespace App\Http\Livewire\editor;

use Livewire\Component;
use App\Models\Catedral;
use Livewire\WithPagination;

class CatedralIndex extends Component
{
    use WithPagination;
    public $search;
    public $tipo = "catedral";




    public function render()
    {
        if($this->tipo == 'catedral') {
            $elementos = Catedral::where([['name','LIKE','%'.$this->search.'%'],
                                        ['categoria','<',20]
            ])

                ->orderby('id')

                ->paginate(8);
        } else {
            $elementos = Catedral::where([['name','LIKE','%'.$this->search.'%'],
                                         ['categoria','=',Catedral::MONUMENTO]
            ])
            ->orderby('orden')
            ->paginate(8);

        }
        $tipo =$this->tipo;
        return view('livewire.editor.catedral-index' ,compact('elementos','tipo'));
    }
    public function limpiar_page() {
        $this->resetPage();
    }
    public function catedral() {
        $this->tipo = "catedral";
        $this->resetPage();
    }
    public function monumentos() {
        $this->tipo = "monumentos";
        $this->resetPage();
    }

}
