<?php

namespace App\Http\Controllers;

use App\Models\Votacao;
use App\Models\Categoria;
use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotacaoController extends Controller
{

    public function create()
    {
        return view('/cadastros/votacao', [
            'categorias' => Categoria::all()
        ]);
    }
    
    public function store(Request $request)
    {
        $randCod = random_int(10000000, 99999999);

        $votacao                     = new Votacao();
        $votacao->codigo             = $randCod;
        $votacao->categoria_id       = $request->categoria_id;
        $votacao->usuario_id         = Auth::id();
        $votacao->titulo             = $request->titulo;
        $votacao->descricao          = $request->descricao;
        $votacao->datahora_inicio    = $request->datahora_inicio;
        $votacao->datahora_fim       = $request->datahora_fim;
        $votacao->publica            = $request->publica;
        if ($request->hasFile('foto_capa')) {
            $file = $request->file('foto_capa');
            $destinationPath = 'uploads';
            $filename = time() . '_' . $file->getClientOriginalName(); 
            $file->move($destinationPath, $filename);
            $votacao->foto_capa = $filename;
        }
        $votacao->save();

        $hash = md5($randCod);
        $candidatosAleatorios = Candidato::inRandomOrder()->limit(2)->get();

        return view('/votacaoPublica', [
            'hash' => $hash,
            'candidatos' => $candidatosAleatorios,
            'votacao' => $votacao
        ]);
    }

}
