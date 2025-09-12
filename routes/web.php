<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\CorridaController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\ImcController;
use App\Http\Controllers\PaceController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/formulario', [FormularioController::class, 'index'])->name('formulario.index');
Route::post('/formulario', [FormularioController::class, 'store'])->name('formulario.store');

Route::get('/corridas/create', [CorridaController::class, 'create'])->name('corridas.create');
Route::post('/corridas', [CorridaController::class, 'store'])->name('corridas.store');

Route::get('/historico', [HistoricoController::class, 'index'])->name('historico');

Route::get('/imc', [ImcController::class, 'index'])->name('imc');
Route::post('/imc', [ImcController::class, 'calcular'])->name('calcular.imc');

Route::get('/pace', [PaceController::class, 'index'])->name('pace');
Route::post('/pace', [PaceController::class, 'calcular'])->name('calcular.pace');


