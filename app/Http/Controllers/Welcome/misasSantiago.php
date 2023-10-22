<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;

class misasSantiago extends Controller
{
    public function show($item = null)
    {
        $elemento = Catedral::where('categoria',Catedral::HOME)->first();
        $misas = $elemento->misasSantiago;

        return view('welcome.misasSantiago',compact('misas'));
    }
}
