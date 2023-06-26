<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/livros', 'LivroController@index'); // Retorna todos os livros cadastrados.

Route::get('/livros/{id}', 'LivroController@show'); // Retorna os detalhes do livro através do método show.

Route::post('/livros', 'LivroController@store'); // Recebe os dados do formulário de cadastro de novos livros e grava no banco.

Route::delete('/livros/{id}', 'LivroController@destroy'); // Exclui um determinado livro.

Route::post('/login', 'App\Http\Controllers\AuthController@login');
