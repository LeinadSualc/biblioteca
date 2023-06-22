<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;


class ReservaController extends Controller
{
    public function store(Request $request)
    {
        $reserva = new Reserva();
        $reserva->aluno_id = $request->input('aluno_id');
        $reserva->livro_id = $request->input('livro_id');
        $reserva->dataInicio = $request->input('dataInicio');
        $reserva->dataFim = $request->input('dataFim');
        $reserva->observacao = $request->input('observacao');
        $reserva->save();

    }
}
