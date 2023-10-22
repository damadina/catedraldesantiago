<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;
class calendarioLiturgico extends Controller
{
    public function show($item = null)
    {
        $elemento = Catedral::where('categoria',Catedral::HOME)->first();
        $calendario = $elemento->calendarioLiturgico;

        return view('welcome.calendarioLiturgico',compact('calendario'));
    }
}
