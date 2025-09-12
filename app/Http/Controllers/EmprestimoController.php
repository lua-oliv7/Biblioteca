<?php

namespace App\Http\Controllers;

use App\Models\Empréstimo;
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    public function store(Request $request)
    {

        $emprestimo = Empréstimo::create([
            'data_emprestimo' => $request->data_emprestimo,
            'data_devolucao' => $request->data_devolucao,
            'codigo_membro' => $request->codigo_membro,
            'codigo_livro' => $request->codigo_livro
        ]);
    }

    public function index()
    {
        $emprestimo = Empréstimo::all();

        return response()->json($emprestimo);
    }
}
