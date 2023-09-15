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

        return view('series.index') 
        ->with('listaSeries', $listaSeries);        
    }

    public function create()
    {
        return  view('series.create');
    }
}
