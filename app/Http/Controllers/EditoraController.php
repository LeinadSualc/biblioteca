<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditoraController extends Controller
{
    public function store(Request $request)
    {   
        $editora= new Editora();
        $editora->nome = $request->input('nome');
        $editora->endereco = $request->input('endereco');
        $editora->cidade = $request->input('cidade');
        $editora->uf = $request->input('uf');
        $editora->telefone = $request->input('telefone');

        $editora->save();
    }
}
