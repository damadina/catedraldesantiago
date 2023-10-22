<?php

namespace App\Http\Livewire\Welcome;

use Livewire\Component;
use App\Models\CatedralInfo;
use App\Models\InfosReview;

class InfosReviews extends Component
{
    public $info_id,$comment;
    public $rating = 5;


    protected $listeners = ['delete'];

    public function mount(CatedralInfo  $info) {
        $this->info_id = $info->id;

    }

    public function render()
    {
        $info = CatedralInfo::find($this->info_id);
        return view('livewire.welcome.infos-reviews', compact('info'));
    }
    public function store() {

        $info = CatedralInfo::find($this->info_id);


        $info->reviews()->create([
            'comment' => $this->comment,
            'rating' => $this->rating,
            'user_id'=> Auth()->user()->id
        ]);
    }

    public function delete(InfosReview  $review) {
        $review->delete();
        $this->reset(['comment']);
    }


}
