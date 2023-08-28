<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    
    public function create()
    {
        return view('/cadastros/candidato', [
            'categorias' => Categoria::all()
        ]);
    }

    public function store(Request $request)
    {
        $validarCandidato = $request->validate([
            'nome' => 'required|string|max:80',
            'foto' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048', 
        ]);

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

        return redirect()->route('home');
    }

}
