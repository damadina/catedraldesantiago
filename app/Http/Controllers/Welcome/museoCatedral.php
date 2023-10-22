<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;

class museoCatedral extends Controller
{
    public function show($item = null)
    {
        $museo = Catedral::where('categoria',Catedral::MUSEO)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();

        return view('welcome.museoCatedral',compact('museo'));
    }
}
