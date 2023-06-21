<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function store(Request $request)
    {   
        $curso = new Curso();
        $curso->nome = $request->input('nome');
        $curso->coordenador = $request->input('coordenador');
        $curso->duracao = $request->input('duracao');
        $curso->save();
    }
}
