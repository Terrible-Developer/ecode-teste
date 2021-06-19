<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Pessoa;
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
    return view('welcome');
});

Route::get('/pessoas', function(){
    $ctArr;

    $ctArr = Pessoa::get()->toJson(JSON_PRETTY_PRINT);

    $myArr = json_decode(Pessoa::get()->toJson(JSON_PRETTY_PRINT));

    pegarTelefonePessoa(1);

    return view('pessoas', ['pessoas' => $myArr, 'pessoasCt' => $ctArr]);
});

Route::get('/editarpessoa/{id}', function($id){
    //echo 'console.log(' . $id . ')';
    $pessoa = getPessoa($id);
    return view('editarpessoa', ['pessoa' => $pessoa]);
});

function salvarEdicao($pessoa){
    echo 'console.log(' . $pessoa->genero . ')';
    //Pessoa::whereId($pessoa->id)->update(['nome' => $pessoa->nome, 'genero' => $pessoa->genero]);
    //return back();
    /*
     * Pessoa::update();
     */
}

function getPessoa($pessoaid){
    $pessoa = Pessoa::find($pessoaid);
    return $pessoa;
}

function pegarTelefonePessoa($pessoaid){
    $telefones = Telefones::where('id_pessoa', '=', $pessoaid)->firstOrFail();
        //echo $telefones;
}
