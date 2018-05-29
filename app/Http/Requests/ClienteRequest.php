<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
      return [
        'nome.required' => 'O campo "Nome" é obrigatório!',
        'nome.min' => 'O número de caracteres para Nome não pode ser menor que 5!',
        'nome.max' => 'O número de caracteres para Nome não pode ser maior que 100!',
        'email.required' => 'O campo "E-mail" é obrigatório!',
        'email.min' => 'O número de caracteres para o e-mail não pode ser menor que 5!',
        'email.max' => 'O número de caracteres para o e-mail não pode ser maior que 255!',
        'email.email' => 'Digite um endereço de e-mail válido!',
        'email.unique' => 'Este e-mail já está cadastrado!',
        'foto.required' => 'Insira uma foto!',
        'foto.mimes' => 'Insira um arquivo de imagem .png!',
        'numero.numero_par' => 'Apenas número par!',
      ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nome' => 'required | min:5 | max:100',
          'email'=> 'required | min:5 | max:255 | email | unique:users',
          'foto' => 'required | mimes:png,jpeg,bmp',
          'numero' => 'numero_par',
        ];
    }

}
