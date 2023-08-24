<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotacaoController extends Controller
{
    public function index() 
    {
        return view('/cadastros/votacao');
    }

    public function store(Request $request) 
    {
        $votacao                     = new Votacao();
        $votacao->titulo             = $request->titulo;
        $votacao->descricao          = $request->descricao;
        $votacao->datahora_inicio    = $request->datahora_inicio;
        $votacao->datahora_fim       = $request->datahora_fim;
        $votacao->foto_capa          = $request->foto_capa;
        $votacao->save();
    }
}
