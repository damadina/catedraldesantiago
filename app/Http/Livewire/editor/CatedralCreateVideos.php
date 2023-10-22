<?php

namespace App\Http\Livewire\editor;

use Livewire\Component;

use App\Models\Catedral;
use App\Models\CatedralVideo;


class CatedralCreateVideos extends Component
{

    public $open = false;
    public $titulo, $url, $orden, $videohtml ;
    public $elemento;



    protected $rules = [
        'titulo' => 'required',
        'url' => 'required',
        'orden' => 'required',
        'videohtml' => 'required'
    ];

    public function mount(Catedral $elemento) {
        $this->elemento = $elemento;
    }

    public function render()
    {
        return view('livewire.editor.catedral-create-videos');
    }

    public function save() {


         $this->validate();


         $video = CatedralVideo::create([
             'titulo' => $this->titulo,
             'orden' => $this->orden,
             'url' => $this->url,
             'videohtml' => $this->videohtml,
         ]);

         $this->elemento->videos()->save($video);
         $this->reset(['open','titulo','orden','url', 'videohtml']);

         $this->emitTO('editor.catedral-index-videos','render');
     }
     public function cancelar() {
         $this->reset(['open','titulo','orden','url', 'videohtml']);

     }



}

