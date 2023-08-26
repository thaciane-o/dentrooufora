<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    
    public function create()
    {
        return view('/cadastros/candidato');
    }

    public function store(Request $request)
    {
        $candidato                   = new Candidato();
        $candidato->nome             = $request->nome;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = 'uploads';
            $filename = $file->getClientOriginalName(); 
            $file->move($destinationPath, $filename);
            $candidato->foto = $filename;
        }
        $candidato->save();

        return view('/cadastros/candidato');
    }

}
