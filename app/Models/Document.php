<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    const LEGAL =  1;
    const PRIVACIDAD = 2;
    const COOKIES = 3;
    protected $fillable = ['id','texto'];

}
