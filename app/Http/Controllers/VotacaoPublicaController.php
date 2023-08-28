<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Votacao;
use App\Models\Candidato;

class VotacaoPublicaController extends Controller
{

    public function show($hash)
    {
        $votacao = Votacao::where('codigo', $hash)->firstOrFail();
        
        $candidatos = Candidato::inRandomOrder()->limit(2)->get();

        return view('votacaoPublica', [
            'votacao' => $votacao,
            'candidatos' => $candidatos,
        ]);
    }
}
