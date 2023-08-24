<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function index() 
    {
        return view('/cadastros/candidato');
    }

    public function store(Request $request) 
    {
        $candidato                     = new Candidato();
        $candidato->nome             = $request->nome;
        $candidato->foto             = $request->foto;
        $candidato->save();
    }

}
