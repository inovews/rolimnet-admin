<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContatoRequest;
use App\Contato;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('site.contato.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        //
        //return view('site.contato.index');

        $this->validate($request, [
                'nome' => 'required',
                'email' => 'required|email',
                'telefone' => 'required',
                'assunto' => 'required',
                'mensagem' => 'required'
            ]);

        Contato::create($request->all());

        return \Redirect::route('contato.index')->with('success', 'E-mail enviado com sucesso.');
    }

    public function sendWelcome(Request $request)
    {
        //
        //return view('site.contato.index');

        $this->validate($request, [
                'nome' => 'required',
                'email' => 'required|email',
                'telefone' => 'required',
                'assunto' => 'required',
                'mensagem' => 'required'
            ]);

        Contato::create($request->all());

        return redirect('/#contato')->with('success-contacts', 'E-mail enviado com sucesso.');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

}
