<?php

namespace App\Http\Livewire\welcome;

use App\Models\Catedral;
use App\Models\CatedralReview;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CatedralReviews extends Component
{
    public $elemento_id,$comment;
    public $rating = 5;

    protected $listeners = ['delete'];

    public function mount(Catedral $elemento) {
        $this->elemento_id = $elemento->id;
    }

    public function render()
    {
        $elemento = Catedral::find($this->elemento_id);
        return view('livewire.welcome.catedral-reviews', compact('elemento'));
    }

    public function store() {

        $elemento = Catedral::find($this->elemento_id);
        $elemento->comentarios()->create([
            'comment' => $this->comment,
            'rating' => $this->rating,
            'user_id'=> Auth()->user()->id
        ]);

    }

    public function delete(CatedralReview  $comentario) {
        $comentario->delete();
        $this->reset(['comment']);
    }

}
