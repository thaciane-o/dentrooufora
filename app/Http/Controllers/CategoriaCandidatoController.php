<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Candidato;
use App\Models\CategoriaCandidato;

class CategoriaCandidatoController extends Controller
{
    public function create()
    {
        return view('/cadastros/categoriaCandidato', [
            'categorias' => Categoria::all(),
            'candidatos' => Candidato::all()
        ]);
    }

    public function store(Request $request)
    {
        $validarCategoriaCandidato = $request->validate([
            'categoria_id.*' => 'required',
        ]);
    
        $candidato_id = $request->candidato_id;
    
        foreach ($request->categoria_id as $categoria_id) {
            $existeRelacao = CategoriaCandidato::where('categoria_id', $categoria_id)
                ->where('candidato_id', $candidato_id)
                ->exists();
    
            if (!$existeRelacao) {
                $categoriaCandidato = new CategoriaCandidato();
                $categoriaCandidato->categoria_id = $categoria_id;
                $categoriaCandidato->candidato_id = $candidato_id;
                $categoriaCandidato->save();
            }
        }
    
        return redirect()->route('home');
    }
    
}
