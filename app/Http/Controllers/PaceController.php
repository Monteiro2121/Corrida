<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PaceController extends Controller
{
        public function index()
    {
        return view('pace');
    }

    public function calcular(Request $request)
    {
        $request->validate([
            'km' => ['required', 'regex:/^\d+([.,]\d{1,2})?$/'],
            'time' => ['required', 'regex:/^\d+([.,]\d{1,2})?$/'],
        ]);

        $km = str_replace(',', '.', $request->input('km'));
        $time = str_replace(',', '.', $request->input('time'));

        $pace = $time / $km;
        $paceFormatado = number_format($pace, 2);

        return view('pace', compact('paceFormatado', 'km', 'time'));
    }

}
