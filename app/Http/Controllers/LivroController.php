<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $validatedData = $request->validate([
            'titulo' => 'required|string',
            'subTitulo' => 'nullable|string',
            'isbn' => 'nullable|string',
            'autor_id' => 'required|exists:autores,id',
            'editora_id' => 'required|exists:editoras,id',
            'local' => 'nullable|string',
            'ano' => 'required|integer',
        ]);

    // Criação do novo livro no banco de dados
    $livro = Livro::create([
        'titulo' => $validatedData['titulo'],
        'sub_titulo' => $validatedData['subTitulo'],
        'isbn' => $validatedData['isbn'],
        'autor_id' => $validatedData['autor_id'],
        'editora_id' => $validatedData['editora_id'],
        'local' => $validatedData['local'],
        'ano' => $validatedData['ano'],
    ]);

    // Retorno da resposta em JSON com o livro criado
    return response()->json($livro, 201);
}

public function update(Request $request, $id)
{
    // Busca o livro pelo ID
    $livro = Livro::findOrFail($id);

    // Validação dos dados recebidos
    $validatedData = $request->validate([
        'titulo' => 'required|string',
        'subTitulo' => 'nullable|string',
        'isbn' => 'nullable|string',
        'autor_id' => 'required|exists:autores,id',
        'editora_id' => 'required|exists:editoras,id',
        'local' => 'nullable|string',
        'ano' => 'required|integer',
    ]);

    // Atualiza os dados do livro
    $livro->update([
        'titulo' => $validatedData['titulo'],
        'sub_titulo' => $validatedData['subTitulo'],
        'isbn' => $validatedData['isbn'],
        'autor_id' => $validatedData['autor_id'],
        'editora_id' => $validatedData['editora_id'],
        'local' => $validatedData['local'],
        'ano' => $validatedData['ano'],
    ]);

    // Retorno da resposta em JSON com o livro atualizado
    return response()->json($livro, 200);
}

public function destroy($id)
{
    $livro = Livro::find($id);

    if ($livro) {
        $livro->delete();
        return response()->json(['message' => 'Livro excluído com sucesso']);
    } else {
        return response()->json(['message' => 'Livro não encontrado'], 404);
    }
}


    public function index()
    {
        $livros = Livro::all();

        return response()->json($livros);
    }

    public function show($id)
    {
    $livro = Livro::findOrFail($id);

    return response()->json($livro);
    }
}
