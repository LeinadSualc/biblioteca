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
       // primeiro modelo $aluno->curso_id = $request->input('curso_id'); // atribui o ID do curso, não o objeto completo


        // Obter o ID do curso com base no nome fornecido pelo usuário
        $cursoNome = $request->input('curso');
        $curso = Curso::where('nome', $cursoNome)->first();

        if ($curso) {
            $aluno->curso_id = $curso->id;
        }

        $aluno->save();
    }
}
