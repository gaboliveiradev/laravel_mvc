<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    FuncionarioController,
    ProdutoController
};

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

Route::post('/funcionario', [FuncionarioController::class, 'index']);
Route::get('/funcionario/create', [FuncionarioController::class, 'create']);
Route::post('/funcionario/{item}', [FuncionarioController::class, 'show']);

Route::post('/produto', [ProdutoController::class, 'index']);
