<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;

class interiorCatedral extends Controller
{
    public function show($item = null)
    {
        $otros = Catedral::where('categoria',Catedral::OTROS)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();
      $portico = Catedral::where('categoria',Catedral::PORTICO)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();
      $otros = $portico->merge($otros);

        return view('welcome.interiorCatedral',compact('otros'));
    }
}
