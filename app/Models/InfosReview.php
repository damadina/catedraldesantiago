<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfosReview extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function info()
    {
        return $this->belongsTo(CatedralInfo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }




}
