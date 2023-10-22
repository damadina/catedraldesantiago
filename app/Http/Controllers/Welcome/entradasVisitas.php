<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use App\Models\Catedral;
use Illuminate\Http\Request;


class entradasVisitas extends Controller
{
    public function show($item = null)
    {
        $elemento = Catedral::where('categoria',Catedral::HOME)->first();
        $entradas = $elemento->entradasVisitas;

        return view('welcome.entradasVisitas',compact('entradas'));
    }
}
