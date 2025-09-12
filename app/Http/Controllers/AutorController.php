<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function store(Request $request)
    {

        $autor = Autor::create([
            'nome_completo' => $request->nome_completo,
            'data_nascimento' => $request->data_nascimento,
            'nascionalidade' => $request->nascionalidade
        ]);
    }

    public function index()
    {
        $autor = Autor::all();

        return response()->json($autor);
    }
}
