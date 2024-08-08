<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');

Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');

Route::post('/store', [ClienteController::class, 'store'])->name('clientes.store');

Route::get('/show/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');

Route::get('/edit/{cliente}', [ClienteController::class, 'edit'])->name('clientes.edit');

Route::put('/update/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');

Route::delete('/destroy/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

// As chaves {} na rota são usadas para definir parâmetros dinâmicos, é um parâmetro de rota que captura o ID do cliente que deve ser atualizado.
// Isso permite que o controlador identifique qual recurso específico está sendo manipulado.
