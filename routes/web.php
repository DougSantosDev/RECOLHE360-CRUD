<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('agendamentos.index'); // redireciona para a lista
});

Route::resource('agendamentos', AgendamentoController::class);
