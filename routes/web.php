<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;

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

/*Route::get('/', function () {
    return 'Algo está acontendo';
});
*/
Route::get('/',[CidadeController::class,'show'])->name('cidade.lista');

Route::get('/cidades/formulario',[CidadeController::class,'index'])->name('cidade.formulario');

Route::get('/cidades/formulario/{id}',[CidadeController::class,'edit'])->name('cidade.formulario.edit');;

Route::post('/cidades/insere',[CidadeController::class,'create'])->name('cidade.insere');

Route::post('/cidades/edicao/{id}',[CidadeController::class,'update'])->name('cidade.edicao');

Route::post('/cidades/exclusao/{id}',[CidadeController::class,'delete'])->name('cidade.exclusao');