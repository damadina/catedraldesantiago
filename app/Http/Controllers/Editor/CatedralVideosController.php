<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;

class CatedralVideosController extends Controller
{

    public function index(Catedral $elemento)
    {
        return view('editor.catedral.videos.index', compact('elemento'));
    }


}
