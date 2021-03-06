<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( ClienteRequest $request)
    {
        /*$this->validate($request, [
          'nome' => 'required | min:5 | max:100',
          'email'=> 'required | min:5 | max:255 | email',
        ],[
          'nome.required' => 'O campo "Nome" é obrigatório!',
          'nome.min' => 'O número de caracteres para Nome não pode ser menor que 5!',
          'nome.max' => 'O número de caracteres para Nome não pode ser maior que 100!',
          'email.required' => 'O campo "E-mail" é obrigatório!',
          'email.min' => 'O número de caracteres para o e-mail não pode ser menor que 5!',
          'email.max' => 'O número de caracteres para o e-mail não pode ser maior que 255!',
          'email.email' => 'Digite um endereço de e-mail válido!'
        ]);*/

        return response()->json(['data' => 'Ok!']);
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
