<?php

namespace App\Http\Controllers\welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class fototecaCatedral extends Controller
{
    public function index()
    {
        return view('welcome.fototeca');
    }
}
