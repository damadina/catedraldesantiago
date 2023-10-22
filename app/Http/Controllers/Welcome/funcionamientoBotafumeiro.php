<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;

class funcionamientoBotafumeiro extends Controller
{
    public function show($item = null)
    {
        $elemento = Catedral::where('categoria',Catedral::HOME)->first();
        $botafumeiro = $elemento->funcionamientoBotafumeiro;

        return view('welcome.funcionamientoBotafumeiro',compact('botafumeiro'));
    }
}
