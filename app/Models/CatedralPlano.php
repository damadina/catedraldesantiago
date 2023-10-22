<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatedralPlano extends Model
{
    use HasFactory;
    protected $fillable = ['id','url','alt','piePlano','orden','nombrePlano','catedral_id'];

    public function elemento()
    {
        return $this->belongsTo(Catedral::class);
    }



}
