<?php

use App\Http\Controllers\MachinesController;
use Illuminate\Support\Facades\Http;
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



//página inicial
Route::get('/',[MachinesController::class,'index']);
/* ESSAS ROTAS SÃO AS PERSONALIZADAS
//listar todos
Route::get('/listar',[MachinesController::class,'index']);

//mostrar um específico
Route::get('/visualizar/{id}',[MachinesController::class,'show']);

//pagina de cadastro
Route::get('/cadastrar',[MachinesController::class,'create']);

//PARA ENVIAR DADOS UTILIZAMOS POST
Route::post('/cadastrar',[MachinesController::class,'store']);
*/

//NESSE PROJETO, VOU USAR AS ROTAS PADRÃO DO LARAVEL

//MACHINES É O NOME DA CONTROLLER
Route::resource('machines',MachinesController::class);