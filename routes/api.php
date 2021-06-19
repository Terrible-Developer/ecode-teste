<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('pessoa', 'App\Http\Controllers\PessoaController');
Route::apiResource('pessoajuridicas', 'App\Http\Controllers\PessoaJuridicasController');
Route::apiResource('endereco', 'App\Http\Controllers\EnderecoController');
Route::apiResource('telefone', 'App\Http\Controllers\TelefoneController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
