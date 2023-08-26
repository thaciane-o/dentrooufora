<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\VotacaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home',             [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/candidato',        [CandidatoController::class, 'create'])->name('candidato.create');
Route::post('/candidato',       [CandidatoController::class, 'store'])->name('candidato.store');

Route::get('/votacao',          [VotacaoController::class, 'create'])->name('votacao.create');
Route::post('/votacao',         [VotacaoController::class, 'store'])->name('votacao.store');

Route::get('/categoria',        [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria',       [CategoriaController::class, 'store'])->name('categoria.store');

Route::get('/votacao/{hash}', [VotacaoController::class, 'store'])->name('votacao.publica');

