<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function store(Request $request)
    {
        $aluno = new Aluno();
        $aluno->ra = $request->input('ra');
        $aluno->nome = $request->input('nome');
        $aluno->endereco = $request->input('endereco');
        $aluno->cidade = $request->input('cidade');
        $aluno->uf = $request->input('uf');
        $aluno->telefone = $request->input('telefone');
        $aluno->curso_id = $request->input('curso_id'); // atribui o ID do curso, não o objeto completo


        $aluno->save();
    }
}
