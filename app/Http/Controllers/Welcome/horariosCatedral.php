<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;
class horariosCatedral extends Controller
{
    public function show($item = null)
    {
        $elemento = Catedral::where('categoria',Catedral::HOME)->first();
        $horarios = $elemento->horarios;

        return view('welcome.horariosCatedral',compact('horarios'));
    }
}
