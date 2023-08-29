<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Votacao;
use App\Models\Candidato;
use Illuminate\Support\Facades\DB;

class VotacaoPublicaController extends Controller
{

    public function show($hash)
    {
        $votacao = Votacao::where('codigo', $hash)->firstOrFail();
        
        $candidatos = DB::table('votacao')
                    ->join('categoria', 'votacao.categoria_id', '=', 'categoria.id')
                    ->join('categoria_candidato', 'categoria.id', '=', 'categoria_candidato.categoria_id')
                    ->join('candidato', 'categoria_candidato.candidato_id', '=', 'candidato.id')
                    ->select('candidato.*')
                    ->inRandomOrder()->limit(2)->get();

        return view('votacaoPublica', [
            'votacao' => $votacao,
            'candidatos' => $candidatos,
        ]);
    }
}
