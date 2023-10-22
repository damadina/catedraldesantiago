<?php

namespace App\Http\Controllers\welcome;

use App\Http\Controllers\Controller;
use App\Models\Catedral;
use App\Models\CatedralFoto;

class inicioCatedral extends Controller
{
    public function show()
    {
      /* $elemento = Catedral::where('categoria',Catedral::HOME)->first();
      $fachadas = Catedral::where('categoria',Catedral::FACHADAS)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();
      $capillas = Catedral::where('categoria',Catedral::CAPILLAS)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();
      $otros = Catedral::where('categoria',Catedral::OTROS)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();
      $portico = Catedral::where('categoria',Catedral::PORTICO)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();

      $museo = Catedral::where('categoria',Catedral::MUSEO)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();

      $elementos = Catedral::where('status',Catedral::PUBLICADO)
          ->where('categoria','!=',Catedral::HOME)
          ->orderby('categoria')
          ->get();
      $otros = $portico->merge($otros);


      $interes = Catedral::where('id',2)
      ->orWhere('id',44)
      ->orWhere('id',3)
      ->orWhere('id',25)
      ->orWhere('id',29)
      ->get();

      $fotos = $elemento->fotos;
      $planos = $elemento->planos;
      $videos = $elemento->videos;
      $questions = $elemento->questions;
      $infos = $elemento->infos;
      $reports = $elemento->reports;
      $opiniones = $elemento->opinion;

      $title = $elemento->name;
      $allItems = new \Illuminate\Database\Eloquent\Collection;
      $allItems = $allItems->merge($fachadas);
      $allItems = $allItems->merge($capillas);
      $allItems = $allItems->merge($otros);
      $allItems = $allItems->merge($museo); */



   /*  return view('welcome.home',compact('allItems','elemento','fotos','planos','videos','questions','infos','fachadas','capillas','otros','museo','interes','reports','opiniones'));
 */

    $elemento = Catedral::where('categoria',Catedral::HOME)->first();
    $reports = $elemento->reports;


    $fotoPagina = CatedralFoto::where([
            ['catedral_id',$elemento->id],
            ['orden',1]
            ])->first();

    $fotoPagina = $fotoPagina->url;

    $exterior = Catedral::where('categoria',Catedral::FACHADAS)
      ->where('status',Catedral::PUBLICADO)
      ->orderBy('orden','asc')
      ->get();



    return view('welcome.inicio', compact('reports','elemento','fotoPagina','exterior'));

    }
}
