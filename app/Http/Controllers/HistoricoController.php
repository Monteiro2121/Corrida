<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Corrida;

class HistoricoController extends Controller
{
    public function index()

    {
        $corridas = Corrida::all(); 

    return view('historico', compact('corridas'));
    }
}
