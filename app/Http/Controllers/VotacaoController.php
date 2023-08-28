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
        $validarCandidato = $request->validate([
            'titulo' => 'required|string|max:80',
            'descricao' => 'nullable|string|max:255', 
            'publica' => 'required|integer|min:0|max:1',
            'datahora_inicio' => 'required',
            'datahora_fim' => 'nullable',
            'foto_capa' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $randCod = random_int(10000000, 99999999);
        $hash = md5($randCod);
        $shortHash = substr($hash, 0, 8);

        $votacao                     = new Votacao();
        $votacao->codigo             = $shortHash;
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
        
        return redirect()->route('home');
    }

}
