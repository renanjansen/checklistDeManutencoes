<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ListaEnderecoController;
use App\Http\Controllers\OsController;

Route::get('/' ,[ListaEnderecoController::class, 'listarEnderecos']);
Route::get('/manutencoes' ,[ListaEnderecoController::class, 'listarManutencoes']);
Route::get('/registroDeOs',[OsController::class, 'cadastrarOs']);


// define a rota que recebe dados via post da view de cadastro
Route::post('/',[ListaEnderecoController::class, 'cadastrarManutencoes']);
