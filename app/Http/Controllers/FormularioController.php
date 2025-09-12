<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class FormularioController extends Controller
{
    public function index()
    {
        // dd('Cheguei no método index');

        return view('formulario'); 
    }
 
    public function store(Request $request)
    {
        // dd($request);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'password' => bcrypt($request->password) 
        ]);
        
        // dd('Está salvando');
        return redirect()->route('login')->with('success', 'Usuario cadastrado');
    }

}
