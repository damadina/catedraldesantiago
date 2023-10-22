<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Welcome\welcomeCatedral;
use App\Http\Controllers\Welcome\welcomeMonumentos;
use App\Http\Controllers\Welcome\contactanosController;
use App\Http\Controllers\Welcome\visitarCatedral;
use App\Http\Controllers\pdf;
use App\Models\Document;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Auth;
use App\Models\Catedral;
use App\Http\Controllers\Welcome\fototecaCatedral;
use App\Http\Controllers\Welcome\inicioCatedral;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Welcome\historiaCatedral;
use App\Http\Controllers\Welcome\turismoCatedral;
use App\Http\Controllers\Welcome\exteriorCatedral;
use App\Http\Controllers\Welcome\interiorCatedral;
use App\Http\Controllers\Welcome\capillasCatedral;
use App\Http\Controllers\Welcome\museoCatedral;
use App\Http\Controllers\Welcome\horariosCatedral;
use App\Http\Controllers\Welcome\misasCatedral;
use App\Http\Controllers\Welcome\misasSantiago;
use App\Http\Controllers\Welcome\calendarioLiturgico;
use App\Http\Controllers\Welcome\entradasVisitas;
use App\Http\Controllers\Welcome\funcionamientoBotafumeiro;

use App\Models\User;
Route::get('error',function(){
    abort('404');
});
Route::get('/download', [pdf::class, 'download'])->name('download');

Route::get('/', [inicioCatedral::class, 'show'])->name('home');
/* Route::get('/catedral-de-santiago', [inicioCatedral::class, 'show']); */
Route::get('/catedral-de-santiago', function(){
    return redirect('/', 301);
});



Route::post('uploadimage',[historiaCatedral::class, 'uploadimage'])->name('uploadImage');



Route::get('login/{driver}', [SocialiteController::class,'redirectToProvider']);
Route::get('login/{driver}/callback', [SocialiteController::class,'handleProviderCallback']);

Route::get('/fototeca-catedral-de-santiago',[fototecaCatedral::class,'index'])->name('fototeca');

Route::get('/historia',[historiaCatedral::class, 'show'])->name('historia');
Route::get('/exterior',[exteriorCatedral::class,'show'])->name('exterior');
Route::get('/interior',[interiorCatedral::class,'show'])->name('interior');
Route::get('/capillas',[capillasCatedral::class,'show'])->name('capillas');
Route::get('/museo',[museoCatedral::class,'show'])->name('museo');
Route::get('/horarios',[horariosCatedral::class,'show'])->name('horarios');
Route::get('/misasCatedral',[misasCatedral::class,'show'])->name('misasCatedral');
Route::get('/misasSantiago',[misasSantiago::class,'show'])->name('misasSantiago');
Route::get('/calendarioLiturgico',[calendarioLiturgico::class,'show'])->name('calendarioLiturgico');
Route::get('/entradasVisitas',[entradasVisitas::class,'show'])->name('entradasVisitas');
Route::get('/funcionamientoBotafumeiro',[funcionamientoBotafumeiro::class,'show'])->name('funcionamientoBotafumeiro');

/* Route::get('catedralfototeca', CatedralFototeca::class)->name('CatedralFototeca'); */

Route::get('/contactanos', [contactanosController::class,'index'])->name('contactanos.index');
Route::post('/contactanos', [contactanosController::class,'store'])->name('contactanos.store');

Route::get('/bibliografia', function(){
    return view('welcome.bibliografia');
})->name('bibliografia');

Route::get('/autores', function(){
    return view('welcome.autores');
})->name('autores');

Route::get('/legal', function(){
    $documento = Document::where('tipo',Document::LEGAL)->first();
    return view('welcome.legal',compact('documento'));


})->name('legal');

Route::get('/privacidad', function(){
    $documento = Document::where('tipo',Document::PRIVACIDAD)->first();

    return view('welcome.legal',compact('documento'));
})->name('privacidad');

Route::get('/cookies', function(){
    $documento = Document::where('tipo',Document::COOKIES)->first();
    return view('welcome.legal',compact('documento'));

})->name('cookies');

Route::get('/mapasitio', function(){

    return view('welcome.mapasitio');

})->name('mapa');

Route::get('/turismo', function(){
    $elemento = Catedral::where('categoria',Catedral::HOME)->first();
    $infos = $elemento->infos;
    $opiniones = $elemento->opinion;

    return view('welcome.turista',compact('elemento','infos','opiniones'));

})->name('turismo');;


Route::get('/{elemento}', [welcomeCatedral::class,'show'] )->name('catedral.show');
/* Route::get('/historia/{slug}',[historiaCatedral::class, 'show'])->name('historia.show'); */

Route::get('/turismo/{slug}',[turismoCatedral::class, 'show'])->name('turismo.show');
