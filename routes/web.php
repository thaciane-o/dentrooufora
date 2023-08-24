<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/candidato',        [App\Http\Controllers\CandidatoController::class, 'index'])->name('candidato');

Route::get('/votacao', [App\Http\Controllers\VotacaoController::class, 'index'])->name('votacao');

Route::get('/categoria',        [CategoriaController::class, 'index'])->name('categoria');
Route::post('/categoria/store', [CategoriaController::class, 'store'])->name('store');
