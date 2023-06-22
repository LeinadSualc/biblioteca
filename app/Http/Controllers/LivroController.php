<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function store(Request $request)
    {
        $livro = new Livro();
        $livro->titulo = $request->input('titulo');
        $livro->subTitulo = $request->input('subTitulo');
        $livro->isbn = $request->input('isbn');
        $livro->autor_id = $request->input('autor_id');
        $livro->editora_id = $request->input('editora_id');
        $livro->local = $request->input('local');
        $livro->ano = $request->input('ano');
        $livro->save();
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
