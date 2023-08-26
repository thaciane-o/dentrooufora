<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    
    public function create()
    {
        return view('/cadastros/categoria');
    }

    public function store(Request $request)
    {
        $categoria            = new Categoria();
        $categoria->nome      = $request->nome;
        $categoria->save();

        return view('/cadastros/categoria');
    }
    
}
