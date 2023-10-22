<?php

namespace App\Http\Livewire\editor;

use App\Models\Catedral;
use App\Models\CatedralFoto;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;



class CatedralCreateFotos extends Component
{
    use WithFileUploads;
    public $open = false;
    public $piefoto, $keywords, $alt, $orden;
    public $isvertical;
    public $elemento;
    public $image;
    public $identificador;

    protected $rules = [
        'piefoto' => 'required',
        'alt' => 'required|max:255',
        'image' => 'required|image|mimes:jpg,jepg',
        'orden' => 'required',
    ];

    public function mount(Catedral $elemento) {
        $this->elemento = $elemento;
        $this->identificador = rand();
    }

    public function render()
    {

        return view('livewire.editor.catedral-create-fotos');
    }

    public function save() {


        $this->validate();

        $pathFotos = 'storage/fotos/'.$this->elemento->id.'/original';
        $pathThumbnail = 'storage/fotos/'.$this->elemento->id.'/thumbnail';

        /* if(!Storage::exists('/public/planos')) {
            Storage::makeDirectory('/public/planos', 775, true); //creates directory
        } */
        if(!Storage::exists($pathFotos)) {
            Storage::makeDirectory('/public/fotos/'.$this->elemento->id.'/original', 777, true);
        }
        if(!Storage::exists($pathThumbnail)) {
            Storage::makeDirectory('/public/fotos/'.$this->elemento->id.'/thumbnail', 777, true);
        }


        $nombreFoto = $this->image->getClientOriginalName();

        $path_parts = pathinfo($nombreFoto);
        $nombreFoto = $path_parts['filename'].'_'.Str::random(10).'.'.$path_parts['extension'];



        $height = Image::make($this->image)->height();
        $width = Image::make($this->image)->width();

        Image::make($this->image)->save($pathFotos.'/'.$nombreFoto);


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




        $foto = CatedralFoto::create([
            'piefoto' => $this->piefoto,
            'keywors' => $this->keywords,
            'alt' => $this->alt,
            'orden' => $this->orden,
            'isvertical' => $this->isvertical,
            'url' => $nombreFoto,
            'nombreFoto' => $nombreFoto,

        ]);


        $this->elemento->fotos()->save($foto);
        $this->reset(['open','piefoto','keywords','alt','image','orden','isvertical']);
        $this->identificador = rand();
        $this->emitTO('editor.catedral-index-fotos','render');
    }
    public function cancelar() {
        $this->reset(['open','piefoto','keywords','alt','image','orden','isvertical']);
        $this->identificador = rand();
    }
}
