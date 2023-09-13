<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function index(Request $request)
    {

        $comidaPraSerie = [
            'Pipoca',
            'Coca',
            'Pizza',
        ];

        return view('comida.index')
        ->with('comidaPraSerie', $comidaPraSerie);
    }
}
