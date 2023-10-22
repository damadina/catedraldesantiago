<?php

namespace App\Http\Livewire\editor;

use Livewire\Component;

use App\Models\Catedral;
use App\Models\CatedralPlano;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class CatedralCreatePlanos extends Component
{
    use WithFileUploads;
    public $open = false;
    public $piePlano,  $orden;
    public $isvertical;
    public $elemento;
    public $image;
    public $identificador;

    protected $rules = [
        'piePlano' => 'required',
        'image' => 'required|image|mimes:jpg,jepg',
        'orden' => 'required',
    ];

    public function mount(Catedral $elemento) {
        $this->elemento = $elemento;
        $this->identificador = rand();
    }

    public function render()
    {
        return view('livewire.editor.catedral-create-planos');
    }

    public function save() {

        if($this->isvertical) {
             $originalWidth = 675;

         } else {
             $this->isvertical = false;
             $originalWidth = 1350;

         }

         $this->validate();



         if(!Storage::exists('/public/planos')) {
             Storage::makeDirectory('/public/planos', 775, true); //creates directory
         }



         $nombrePlano = $this->image->getClientOriginalName();

         $path_parts = pathinfo($nombrePlano);
         $nombrePlano = $path_parts['filename'].'_'.Str::random(10).'.'.$path_parts['extension'];


         Image::make($this->image)->save('storage/planos/'.$nombrePlano);

         $plano = CatedralPlano::create([
             'piePlano' => $this->piePlano,
             'orden' => $this->orden,
             'isvertical' => $this->isvertical,
             'url' => $nombrePlano,
             'nombrePlano' => $nombrePlano,
         ]);

         $this->elemento->fotos()->save($plano);
         $this->reset(['open','piePlano','image','orden','isvertical']);
         $this->identificador = rand();
         $this->emitTO('editor.catedral-index-planos','render');
     }
     public function cancelar() {
         $this->reset(['open','piePlano','image','orden','isvertical']);
         $this->identificador = rand();
     }



}
