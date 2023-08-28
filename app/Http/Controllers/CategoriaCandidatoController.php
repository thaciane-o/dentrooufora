<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaCandidatoController extends Controller
{
    public function store(Request $request)
    {
        $categoriaCandidato                    = new CategoriaCandidato();
        $categoriaCandidato->categoria_id      = $request->categoria_id;
        $categoriaCandidato->candidato_id      = $request->candidato_id;
        $categoriaCandidato->save();
    }
}
