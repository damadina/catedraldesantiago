<?php

namespace App\Http\Controllers\welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CatedralInfo;
use App\Models\Catedral;

class historiaCatedral extends Controller
{
    public function show($item = null)
    {
        $elemento = Catedral::where('categoria',Catedral::HOME)->first();
        $reports = $elemento->reports;

        /* $info = CatedralInfo::where('slug',$item)->first();
 */
        return view('welcome.historia',compact('reports'));
    }
}
