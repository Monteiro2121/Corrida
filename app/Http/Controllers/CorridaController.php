<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Corrida;

class CorridaController extends Controller
{
    // Mostrar formulário para criar corrida
    public function create()
    {
        return view('corridas.create');
    }

    // Salvar corrida no banco
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'data' => 'required|date',
            'pace' => 'required|string',
        ]);

        Corrida::create([
            'nome' => $request->nome,
            'data' => $request->data,
            'pace' => $request->pace,
        ]);

        return redirect()->route('home')->with('success', 'Corrida adicionada!');
    }
}
