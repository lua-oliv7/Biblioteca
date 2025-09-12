<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empréstimo extends Model
{
    use HasFactory;

    protected $fillable = [
        "data_emprestimo",
        "data_devolucao",
        "codigo_membro",
        "codigo_livro"
    ];
}
