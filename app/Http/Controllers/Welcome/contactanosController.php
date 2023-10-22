<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


class contactanosController extends Controller
{
    public function index() {
        return view('contactanos.index');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]);
        $correo = new ContactanosMailable($request->all());
        Mail::to('catedraldesantiago.online@gmail.com')->send($correo);
        return redirect()->back()->with('info', 'Su correo se ha enviado corretamente. Gracias');
    }
}
