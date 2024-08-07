<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Rota para a página inicial (criar cliente)
Route::get('/', [ClienteController::class, 'create'])->name('clientes.create');

// Rota para salvar um novo cliente
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

// Rota para listar todos os clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');

// Rota para mostrar um cliente específico
Route::get('/clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');

// Rota para exibir o formulário de edição de um cliente específico
Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');

// Rota para atualizar um cliente específico
Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');

// Rota para deletar um cliente específico
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

