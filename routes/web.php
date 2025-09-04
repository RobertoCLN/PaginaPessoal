<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class, 'home'])->name('home');
Route::get('/sobre', [PaginaController::class, 'sobre'])->name('sobre');
Route::get('/portfolio', [PaginaController::class, 'portfolio'])->name('portfolio');
Route::get('/contato', [PaginaController::class, 'contato'])->name('contato');
Route::post('/contato', [PaginaController::class, 'store'])->name('contato.store');