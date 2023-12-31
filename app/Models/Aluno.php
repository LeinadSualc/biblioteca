<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $fillable = ['ra', 'nome', 'endereco', 'cidade', 'uf', 'telefone', 'curso_id'];


    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    use HasFactory;
}
