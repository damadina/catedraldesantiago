<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatedralFoto extends Model
{
    use HasFactory;
    protected $fillable = ['id','url','alt','piefoto','orden','catedral_id','nombreFoto','isvertical','elemento'];


    public function elemento()
    {
        return $this->belongsTo(Catedral::class);
    }


}
