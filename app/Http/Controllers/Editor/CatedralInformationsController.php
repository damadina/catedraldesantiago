<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catedral;

class CatedralInformationsController extends Controller
{
    public function index(Catedral $elemento)
    {
        return view('editor.catedral.informations.index', compact('elemento'));
    }
}
