<?php

namespace App\Http\Livewire\editor;

use App\Models\Catedral;
use App\Models\CatedralFoto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CatedralIndexFotos extends Component
{
    use WithFileUploads;
    public $fotos = null;
    public $elemento;
    public $foto;

    public $open_edit = false;

    public $count = 0;
    public $image;
    public $identificador;

    protected $listeners = ['render' => 'render', 'deleteFoto' => 'deleteFoto'];

    protected $rules = [
        'foto.piefoto' => 'required',
        'foto.keywords' => 'nullable',
        'foto.alt' => 'required|max:255',
        'foto.url' => 'required',
        'foto.orden' => 'required',
        'foto.isvertical' => 'required'
    ];




    public function mount( Catedral $elemento) {
        $this->elemento = $elemento;

        $this->fotos = $elemento->fotos;

        $this->identificador = rand();
        $this->foto = new CatedralFoto();
    }


    public function render()
    {

        $this->fotos = $this->elemento->fotos()->orderby('orden')->get();
        /* if ($this->count > 0){
            dd($this->fotos);
        }
        $this->count = $this->count + 1; */

        return view('livewire.editor.catedral-index-fotos');
    }

    public function updatedImage() {
        $this->foto->nombreFoto = $this->image->getClientOriginalName();
    }

    public function edit(CatedralFoto $foto) {
        $this->foto = $foto;
        $this->open_edit = true;
    }
    public function cancelar() {
        $this->reset(['open_edit']);
        $this->identificador = rand();
    }
    public function deleteFoto(CatedralFoto $foto) {
        #Storage::delete([$foto->url]);
        #Borra las fotos
        /* Storage::delete([('public/fotos/original/'.$foto->url)]);
        Storage::delete([('public/fotos/thumbnail/'.$foto->url)]); */


        Storage::delete([('/public/fotos/'.$this->elemento->id.'/original/'.$foto->url)]);
        Storage::delete([('/public/fotos/'.$this->elemento->id.'/thumbnail/'.$foto->url)]);

        $foto->delete();
    }

    public function update() {
        $isvertical = $this->foto->isvertical;

        $this->validate();
        if($this->image) {
            #Borra las fotos
            /* Storage::delete([('public/fotos/original/'.$this->foto->url)]);
            Storage::delete([('public/fotos/thumbnail/'.$this->foto->url)]); */

            Storage::delete([('/public/fotos/'.$this->elemento->id.'/original/'.$this->foto->url)]);
            Storage::delete([('/public/fotos/'.$this->elemento->id.'/thumbnail/'.$this->foto->url)]);

            $pathFotos = 'storage/fotos/'.$this->elemento->id.'/original';
            $pathThumbnail = 'storage/fotos/'.$this->elemento->id.'/thumbnail';;


            #guarda la imagen
            $nombreFoto = $this->image->getClientOriginalName();

            $path_parts = pathinfo($nombreFoto);
            $nombreFoto = $path_parts['filename'].'_'.Str::random(10).'.'.$path_parts['extension'];

            $height = Image::make($this->image)->height();
            $width = Image::make($this->image)->width();

            if($height>$width) {
                $this->isvertical = true;
                Image::make($this->image)
                ->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($pathThumbnail.'/'.$nombreFoto);

            } else {
                $this->isvertical = false;
                Image::make($this->image)
                ->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($pathThumbnail.'/'.$nombreFoto);
            }


            #Image::make($this->image)->save($rutaOriginal);

            Image::make($this->image)->save($pathFotos.'/'.$nombreFoto);




            $this->foto->url = $nombreFoto;



        }

        $this->foto->save();
        $this->reset(['open_edit','image']);
        $this->identificador = rand();
    }
}

/* public function update() {
    $this->validate();
    if($this->image) {
        Storage::delete([$this->foto->url]);
        $image = $this->image->store('public/fotos');
        $this->foto->url = $image;
        $nombreOriginalFoto = $this->image->getClientOriginalName();
        $this->foto->nombreFoto = $nombreOriginalFoto;
    }
    $this->foto->save();
    $this->reset(['open_edit','image']);
    $this->identificador = rand();
} */

