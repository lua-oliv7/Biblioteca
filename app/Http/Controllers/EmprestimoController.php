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

    public function update(Request $request) {
        $emprestimo = Empréstimo::find($request->id);

        if($emprestimo == null) {
            return response()->json([
                'erro' => 'Empréstimo não encontrado'
            ]);
        }
        
        if(isset($request->data_emprestimo)) {
            $emprestimo->data_emprestimo = $request->data_emprestimo;
        }
        if(isset($request->data_emprestimo)) {
            $emprestimo->data_devolucao = $request->data_devolucao;
        }
        if(isset($request->codigo_membro)) {
            $emprestimo->codigo_membro = $request->codigo_membro;
        }
        if(isset($request->codigo_livro)) {
            $emprestimo->codigo_livro = $request->codigo_livro;
        }

        $emprestimo->update();

        return response()->json([
            'mensagem' => 'Atualizada'
        ]);
    }

    public function show($id)
    {
        $emprestimo = Empréstimo::find($id);
        if ($emprestimo == null) {
            return response()->json([
                'erro' => 'Empréstimo não encontrado'
            ]);
        }

        return response()->json($emprestimo);
    }

    public function delete($id) {
        $emprestimo = Empréstimo::find($id);

        if ($emprestimo == null) {
            return response()->json([
                'erro' => 'Empréstimo não encontrado'
            ]);
        }

        $emprestimo->delete();

        return response()->json([
            'mensagem' => 'Excluído'
        ]);
    }
}
