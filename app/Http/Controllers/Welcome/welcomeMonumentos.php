<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;

class welcomeMonumentos extends Controller
{
    public function index(Catedral $elemento = null) {
        $monumentos = Catedral::where('categoria','=',Catedral::MONUMENTO)->get();



        /* if ($elemento == null) {
            $elemento = Catedral::where('categoria',Catedral::MONUMENTOHOME)->first();
        }
        $fotos = $elemento->fotos;
        $planos = $elemento->planos;
        $videos = $elemento->videos;
        $questions = $elemento->questions;
        $infos = $elemento->infos;
        $reports = $elemento->reports;
        $interes = null; */

        return view('welcome.showMonumentosIndex',compact('monumentos'));
    }
    public function show(Catedral $elemento = null) {
        $tipo = "monumento";
        $fotos = $elemento->fotos;
        $planos = $elemento->planos;
        $videos = $elemento->videos;
        $questions = $elemento->questions;
        $infos = $elemento->infos;
        $reports = $elemento->reports;

        return view('welcome.showMonumento',compact('elemento','fotos','planos','videos','questions','infos','reports','tipo'));
    }
}
