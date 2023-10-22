<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatedralReview extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function elemento()
    {
        return $this->belongsTo(Catedral::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
