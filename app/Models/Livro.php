<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'subTitulo', 'isbn', 'autor_id', 'editora_id', 'local', 'ano'];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function editora()
    {
        return $this->belongsTo(Editora::class);
    }
}
