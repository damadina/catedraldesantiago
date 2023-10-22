<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pdf extends Controller
{
    public function download() {
        $path = public_path('pdf/Plano Catedral de Santiago.pdf');
        return response()->download($path);
    }
}
