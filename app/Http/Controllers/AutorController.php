<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function store(Request $request)
    {   
        $autor = new Autor();
        $autor->nome = $request->input('nome');
        $autor->endereco = $request->input('endereco');
        $autor->cidade = $request->input('cidade');
        $autor->uf = $request->input('uf');
        $autor->telefone = $request->input('telefone');


        $autor->save();
    }
}
