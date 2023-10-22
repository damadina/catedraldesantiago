<?php

namespace App\Http\Livewire\editor;

use Livewire\Component;

use App\Models\Catedral;
use App\Models\CatedralPlano;
use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class CatedralIndexPlanos extends Component
{
    use WithFileUploads;
    public $planos = null;
    public $elemento;
    public $plano;

    public $open_edit = false;

    public $count = 0;
    public $image;
    public $identificador;

    protected $listeners = ['render' => 'render', 'deletePlano' => 'deletePlano'];

    protected $rules = [
        'plano.piePlano' => 'required',
        'plano.orden' => 'required',
        'plano.url' => 'required',
    ];




    public function mount( Catedral $elemento) {
        $this->elemento = $elemento;

        $this->planos = $elemento->planos;

        $this->identificador = rand();
        $this->plano = new CatedralPlano();
    }



    public function render()
    {
        $this->planos = $this->elemento->planos()->orderby('orden')->get();
        return view('livewire.editor.catedral-index-planos');
    }
    public function updatedImage() {
        $this->plano->nombrePlano = $this->image->getClientOriginalName();
    }

    public function edit(CatedralPlano $plano) {
        $this->plano = $plano;
        $this->open_edit = true;
    }
    public function cancelar() {
        $this->reset(['open_edit']);
        $this->identificador = rand();
    }
    public function deletePlano(CatedralPlano $plano) {
        Storage::delete([('public/planos/'.$plano->url)]);
        $plano->delete();
    }

    public function update() {


        $this->validate();
        if($this->image) {
            #Borra los planos
            Storage::delete([('public/planos/'.$this->plano->url)]);
            #guarda la imagen
            $nombrePlano = $this->image->getClientOriginalName();

            $path_parts = pathinfo($nombrePlano);
            $nombrePlano = $path_parts['filename'].'_'.Str::random(10).'.'.$path_parts['extension'];


            Image::make($this->image)->save('storage/planos/'.$nombrePlano);

            $this->plano->url = $nombrePlano;



        }

        $this->plano->save();
        $this->reset(['open_edit','image']);
        $this->identificador = rand();
    }



}
