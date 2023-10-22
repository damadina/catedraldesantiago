<?php

namespace App\Http\Livewire\editor;

use Livewire\Component;
use App\Models\Catedral;
use Livewire\WithPagination;


class MonumentoIndex extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {

        $elementos = Catedral::where([['name','LIKE','%'.$this->search.'%'],
                                    ['categoria','>',50]
        ])
            ->orderby('categoria')
            ->orderby('orden')
            ->paginate(8);

        return view('livewire.editor.catedral-index' ,compact('elementos'));
    }
    public function limpiar_page() {
        $this->resetPage();
    }
}
