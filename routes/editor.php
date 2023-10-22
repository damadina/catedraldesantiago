<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Editor\CatedralController;
use App\Http\Controllers\Editor\CatedralFotosController;
use App\Http\Controllers\Editor\CatedralPlanosController;
use App\Http\Controllers\Editor\CatedralVideosController;
use App\Http\Controllers\Editor\CatedralQuestionsController;
use App\Http\Controllers\Editor\CatedralInformationsController;
use App\Models\Catedral;

use App\Http\Livewire\Editor\CatedralCreatePlanos;




Route::get('catedral/{tipo}',[CatedralController::class,'create'])->name('catedrals.create');
Route::resource('catedral', CatedralController::class,)->except(['create'])->parameters(['catedral' => 'elemento'])->names('catedrals');


Route::resource('catedral/{elemento}/fotos', CatedralFotosController::class)->names('fotos');
Route::resource('catedral/{elemento}/planos', CatedralPlanosController::class)->names('planos');
Route::resource('catedral/{elemento}/videos', CatedralVideosController::class)->names('videos');
Route::resource('catedral/{elemento}/questions', CatedralQuestionsController::class)->names('questions');
Route::resource('catedral/{elemento}/informations', CatedralInformationsController::class)->names('informations');
/* Route::get('catedral/{elemento}/fotos', CatedralsFoto::class)->name('catedrals.fotos'); */
