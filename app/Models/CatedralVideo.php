<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatedralVideo extends Model
{
    use HasFactory;
    protected $fillable = ['id','url','titulo','orden','catedral_id','videohtml'];

    public function elemento()
    {
        return $this->belongsTo(Catedral::class);
    }



}
