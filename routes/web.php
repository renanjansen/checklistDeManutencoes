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
use App\Http\Controllers\GeradorDePdfController;
use App\Http\Controllers\ConstrutorDeEmailController;
use App\Mail\SendMailRegistroOs;
use Illuminate\Support\Facades\Mail;

Route::get('/' ,[ListaEnderecoController::class, 'listarEnderecos']);
Route::get('/manutencoes' ,[ListaEnderecoController::class, 'listarManutencoes']);
Route::get('/registroDeOs/{id}',[OsController::class, 'carregaOS'])->name('registroDeOs');
Route::get('/pdfDeOs/{id}', [GeradorDePdfController::class, 'montaPdf']);
Route::get('/imprimePdfDeOs/{id}', [GeradorDePdfController::class, 'geraPdf']);



/*envio de os por email
* Rota que utiliza a Classe return new App\Mail\SendMailRegistroOs();
*/
Route::get('/imprimePdfDeOs/{id}', [ConstrutorDeEmailController::class, 'enviarEmail']);

Route::get('/exibePdf',[ConstrutorDeEmailController::class, 'exibePdf'])->name('exibePdf');


// define a rota que recebe dados via post da view de cadastro
Route::post('/registroDeOs',[OsController::class, 'cadastrarOs']);
