<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PessoaJuridica;

class PessoaJuridicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PessoaJuridica::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        PessoaJuridica::create($request->all());
        return redirect('/cadastrosucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return PessoaJuridica::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pessoajuridica = PessoaJuridica::find($id);
        $pessoajuridica->update($request->all());
        return redirect('/pessoasjuridicas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        PessoaJuridica::destroy($id);
        return redirect('/pessoasjuridicas');
    }
}
