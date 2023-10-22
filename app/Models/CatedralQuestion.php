<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatedralQuestion extends Model
{
    use HasFactory;
    protected $fillable = ['id','respuesta','titulo','orden','catedral_id'];

    public function elemento()
    {
        return $this->belongsTo(Catedral::class);
    }
}
