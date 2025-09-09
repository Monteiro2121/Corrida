<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function index()
    {
        return view('imc');
    }

    public function calcular(Request $request)
    {
        $request->validate([
            'altura' => ['required', 'regex:/^\d{1},\d{2}$/'], // Exemplo: 1,75
            'peso' => ['required', 'regex:/^\d{1,3}(,\d{1,2})?$/'], // Ex: 70 ou 70,5 ou 70,50
        ], [
            'altura.regex' => 'A altura deve estar no formato correto, ex: 1,75',
            'peso.regex' => 'O peso deve estar no formato correto, ex: 70,5',
        ]);
    
        // Converter vírgulas para pontos para cálculo numérico
        $altura = str_replace(',', '.', $request->input('altura'));
        $peso = str_replace(',', '.', $request->input('peso'));
    
        $imc = $peso / ($altura * $altura);
        $imcFormatado = number_format($imc, 2);
    
        return view('imc', compact('imcFormatado', 'altura', 'peso'));
    }
    
}
