<?php

namespace App\Http\Controllers\welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CatedralInfo;

class turismoCatedral extends Controller
{
    public function show($item = null)
    {
        $info = CatedralInfo::where('slug',$item)->first();

        return view('welcome.turismo',compact('info'));
    }
}
