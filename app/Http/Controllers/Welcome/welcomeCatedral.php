<?php

namespace App\Http\Controllers\Welcome;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;
use App\Models\CatedralInfo;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\Storage;
use App\Providers\RouteServiceProvider;
use App\Models\CatedralFoto;



class welcomeCatedral extends Controller
{
    public function show(Catedral $elemento = null) {

        session(key:'URL_ACTUAL', default:99);
        $fachadas = null;
        $capillas = null;
        $otros = null;
        $museo = null;


        $fotos = $elemento->fotos;
        $planos = $elemento->planos;
        $videos = $elemento->videos;
        $opiniones = $elemento->opinion;

        $reports = $elemento->reports;

        switch ($elemento->categoria){
            case Catedral::FACHADAS:
                $literal = "otras fachadas";
                break;
            case Catedral::OTROS:
                $literal = "otros espacios del interior";
                break;
            case Catedral::CAPILLAS:
                $literal = "otras capillas";
                break;
            case Catedral::MUSEO:
                $literal = "otras colecciones del Museo";
                break;
            default:
                $literal = "SINLITERAL";

        }

        $CatedralSantiago = Catedral::where('categoria',Catedral::HOME)->first();
        $ReportsCatedral = $CatedralSantiago->reports;
        $Portico = Catedral::where('categoria',Catedral::PORTICO)->first();
        $ReportsPortico = $Portico->reports;
        $Obradoiro = Catedral::where('id',2)->first();
        $ReportsObradoiro = $Obradoiro->reports;


        $interes = Catedral::where('name','!=',$elemento->name)
        ->where('categoria',$elemento->categoria)
        ->orderBy('orden')
        ->limit(5)
        ->get();

        $fotoPagina = CatedralFoto::where([
            ['catedral_id',$elemento->id],
            ])->first();



        $fotoPagina = $fotoPagina->url;


        return view('welcome.showCatedralPostNew',compact('elemento','fotos','planos','reports','videos','interes','literal','ReportsCatedral','ReportsPortico','ReportsObradoiro','opiniones','fotoPagina'));

       /*  if($elemento->historia == "NUEVO") {
            return view('welcome.showCatedralPostNew',compact('elemento','fotos','planos','reports','videos','interes','literal','ReportsCatedral','ReportsPortico','ReportsObradoiro','opiniones'));
        } else {
            return view('welcome.showCatedralPost',compact('elemento','fotos','planos','reports','videos','interes','literal','ReportsCatedral','ReportsPortico','ReportsObradoiro','opiniones'));
        }
 */



    }
}
