<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;

class capillasCatedral extends Controller
{
    public function show($item = null)
    {
        $capillas = Catedral::where('categoria',Catedral::CAPILLAS)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();

        return view('welcome.capillasCatedral',compact('capillas'));
    }
}
