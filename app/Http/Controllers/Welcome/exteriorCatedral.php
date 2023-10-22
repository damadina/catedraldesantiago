<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Catedral;

class exteriorCatedral extends Controller
{
    public function show($item = null)
    {
        $fachadas = Catedral::where('categoria',Catedral::FACHADAS)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();

        return view('welcome.exteriorCatedral',compact('fachadas'));
    }
}
