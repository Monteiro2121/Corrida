<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImcController;
use App\Http\Controllers\PaceController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/imc', [ImcController::class, 'index'])->name('imc');
Route::post('/imc', [ImcController::class, 'calcular']);

Route::get('/pace', [PaceController::class, 'index'])->name('pace');
Route::post('/pace', [PaceController::class, 'calcular']);

