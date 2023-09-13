<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) 
    {
        $listaSeries = [
            'Breaking Bad',
            'Game of Thrones',
            'Stranger Things',
        ];

        $comidaPraSerie = [
            'Pipoca',
            'Coca',
            'Pizza',
        ];

        return view('series.index') 
        ->with('listaSeries', $listaSeries)
        ->with('comidaPraSerie', $comidaPraSerie);
    }
}
