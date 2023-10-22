<?php

namespace App\Http\Livewire\editor;

use Livewire\Component;

use App\Models\Catedral;
use App\Models\CatedralVideo;



class CatedralIndexVideos extends Component
{

    public $videos = null;
    public $elemento;
    public $video;

    public $open_edit = false;

    public $count = 0;


    protected $listeners = ['render' => 'render', 'deleteVideo' => 'deleteVideo'];

    protected $rules = [
        'video.titulo' => 'required',
        'video.orden' => 'required',
        'video.url' => 'required',
        'video.videohtml' => 'required'
    ];




    public function mount( Catedral $elemento) {
        $this->elemento = $elemento;

        $this->videos = $elemento->videos;
        $this->videos = new CatedralVideo();
    }



    public function render()
    {
        $this->videos = $this->elemento->videos()->orderby('orden')->get();
        return view('livewire.editor.catedral-index-videos');
    }


    public function edit(CatedralVideo $video) {
        $this->video = $video;
        $this->open_edit = true;
    }
    public function cancelar() {
        $this->reset(['open_edit']);
    }
    public function deleteVideo(CatedralVideo $video) {
        $video->delete();
    }

    public function update() {


        $this->validate();

        $this->video->save();
        $this->reset(['open_edit']);
    }



}
