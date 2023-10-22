<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Catedral;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Requests\createCatedralElement;
use App\Http\Requests\updateCatedralElement;


class CatedralController extends Controller
{

    public function index()
    {
        return view('editor.catedral.index');
    }


    public function create($tipo)
    {
        return view('editor.catedral.create',compact('tipo'));
    }


    public function store(createCatedralElement $request)
    {


        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:catedrals',
            'orden' => 'required',
            'resumen' => 'required',
            'historia' => 'required',
            'seoDescription' => 'required|max:190',
            'categoria' => 'required'
        ]);



        if(!Storage::exists('storage/portadas')) {
            Storage::makeDirectory('/public/portadas', 777, true);
        }
        if(!Storage::exists('storage/portadascard')) {
            Storage::makeDirectory('/public/portadascard', 777, true);
        }


        $nombreFoto = null;
        if ($request->file('file')) {
            $nombreFoto = $request->file('file')->getClientOriginalName();
            $path_parts = pathinfo($nombreFoto);
            $nombreFoto = $path_parts['filename'].'_'.Str::random(10).'.'.$path_parts['extension'];
            $request->file('file')->storeAs('public/portadas',$nombreFoto);

            $pathPortadasCard = 'storage/portadascard';

            $image = $request->file('file');

            Image::make($image)->resize(224, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($pathPortadasCard.'/'.$nombreFoto);



        }


        $elemento = Catedral::create([
            'name' => $request['name'],
            'urlPortada' => $nombreFoto,
            'resumen' =>$request['resumen'],
            'status' =>$request['status'],
            'slug' =>$request['slug'] ,
            'categoria' =>$request['categoria'] ,
            'historia' =>$request['historia'] ,
            'mensaje' =>$request['mensaje'],
            'orden' => $request['orden'],
            'visitante' => $request['visitante'],
            'prefijoH1' => $request['prefijoH1'] ,
            'seoDescription' =>$request['seoDescription'],

        ]);
        $elemento->save();


       /* $elemento = Catedral::create($request->all()); */
        return redirect()->route('editor.catedrals.edit',$elemento);
    }


    public function show(Catedral $elemento)
    {

        return view('editor.catedral.show',compact('elemento'));
    }


    public function edit(Catedral $elemento)
    {

        return view('editor.catedral.edit',compact('elemento'));
    }


    public function update(updateCatedralElement $request, Catedral $elemento)
    {

        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:catedrals,slug,'.$elemento->id,
            'orden' => 'required',
            'resumen' => 'required',
            'historia' => 'required',
            'categoria' => 'required',
            'seoDescription' => 'required|max:190',
            'categoria' => 'required'
        ]);


        $nombreFoto = $elemento->urlPortada;
        if ($request->file('file')) {
            $nombreFoto = $request->file('file')->getClientOriginalName();
            $path_parts = pathinfo($nombreFoto);
            $nombreFoto = $path_parts['filename'].'_'.Str::random(10).'.'.$path_parts['extension'];
            $request->file('file')->storeAs('public/portadas',$nombreFoto);

            $pathPortadasCard = 'storage/portadascard';

            $image = $request->file('file');

            Image::make($image)->resize(224, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($pathPortadasCard.'/'.$nombreFoto);



            if($elemento->urlPortada) {
                Storage::delete('public/portadas/'.$elemento->urlPortada);
                Storage::delete('public/portadascard/'.$elemento->urlPortada);
            }
        }


        $elemento->update([
            'name' => $request['name'],
            'urlPortada' => $nombreFoto,
            'resumen' =>$request['resumen'],
            'status' =>$request['status'],
            'slug' =>$request['slug'] ,
            'prefijoH1' => $request['prefijoH1'] ,
            'categoria' =>$request['categoria'] ,
            'historia' =>$request['historia'] ,
            'mensaje' =>$request['mensaje'],
            'orden' => $request['orden'],
            'visitante' => $request['visitante'],
            'seoDescription' =>$request['seoDescription'],

        ]);




       return redirect()->route('editor.catedrals.edit',$elemento);
    }


    public function destroy(Catedral $elemento)
    {
        //
    }
}
