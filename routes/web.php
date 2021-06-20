<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\PessoaJuridica;
use App\Models\Telefones;

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
    return view('home');
});

Route::get('/pessoas', function(){
    $myArr = json_decode(Pessoa::orderBy('id', 'asc')->get()->toJson(JSON_PRETTY_PRINT));

    return view('pessoas', ['pessoas' => $myArr]);
});

Route::get('/pessoasjuridicas', function(){
    $myArr = json_decode(PessoaJuridica::orderBy('id', 'asc')->get()->toJson(JSON_PRETTY_PRINT));

    return view('pessoasjuridicas', ['empresas' => $myArr]);
});

Route::get('/telefones', function(){
    $telefones = json_decode(Telefones::orderBy('id', 'asc')->get()->toJson(JSON_PRETTY_PRINT));
    $pessoas = json_decode(Pessoa::orderBy('id', 'asc')->get()->toJson(JSON_PRETTY_PRINT));
    $pessoasjuridicas = json_decode(PessoaJuridica::orderBy('id', 'asc')->get()->toJson(JSON_PRETTY_PRINT));

    return view('telefones', [ 'telefones' => $telefones, 'pessoas' => $pessoas, 'pessoasjuridicas' => $pessoasjuridicas ]);
});

Route::get('/criarpessoa', function(){
    return view('criarpessoa');
});

Route::get('/criarpessoajuridica', function(){
    return view('criarpessoajuridica');
});

Route::get('/criartelefone', function(){
    $pessoas = Pessoa::orderBy('id', 'asc')->get();
    $pessoasjuridicas = PessoaJuridica::orderBy('id', 'asc')->get();
    return view('criartelefone', ['pessoas' => $pessoas, 'pessoasjuridicas' => $pessoasjuridicas]);
});

Route::get('/cadastrosucesso', function(){
    return view('cadastrosucesso');
});

Route::get('/editarpessoa/{id}', function($id){
    $pessoa = getPessoa($id);
    return view('editarpessoa', ['pessoa' => $pessoa]);
});

Route::get('/editarempresa/{id}', function($id){
    $empresa = getEmpresa($id);
    return view('editarempresa', ['empresa' => $empresa]);
});

Route::get('/editartelefone/{id}', function($id){
    $telefone = getTelefone($id);
    $pessoas = Pessoa::orderBy('id', 'asc')->get();
    $pessoasjuridicas = PessoaJuridica::orderBy('id', 'asc')->get();
    return view('editartelefone', [ 'telefone' => $telefone, 'pessoas' => $pessoas, 'pessoasjuridicas' => $pessoasjuridicas]);
});

/* Funções customizadas */

function getPessoa($pessoaid){
    $pessoa = Pessoa::find($pessoaid);
    return $pessoa;
}

function getEmpresa($empresaid){
    $empresa = PessoaJuridica::find($empresaid);
    return $empresa;
}

function getTelefone($id){
    $telefone = Telefones::find($id);
    return $telefone;
}

function getTelefonePessoa($pessoaid){
    $telefones = Telefones::where('id_pessoa', '=', $pessoaid)->get();
    return $telefones;
}
