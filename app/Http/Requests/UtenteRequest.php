<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtenteRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required','max:100','min:3'],
            'email' => ['required','email','unique:utentes'],
            'PartipacaoExame'=> ['required','string'],
            'InfoExame'=> ['required','string'],
            'tipoParticpacao'=> ['required','string'],
            'provincia'=> ['required','string'],
            'municipio'=> ['required','string'],
            'pais'=> ['required','string'],
            'Instituicao'=> ['required','string'],
            'telefone'=> ['required','integer','min:8']
        ];

    }

    public function messages()
    {
        return[
            "nome.required" => "O Campo nome do Cliente deve ser Preenchido",
            "email.required" => "O Campo Email deve ser Preenchido",
            "PartipacaoExame.required" => "O Campo Participação deve ser Preenchido",
            "tipoParticpacao.required" => "O Campo Tipo de Participação Cliente deve ser Preenchido",
            "provincia.required" => "O Campo Provincia deve ser Preenchido",
            "municipio.required" => "O Campo Municipio deve ser Preenchido",
            "pais.required" => "O Campo nome do Pais deve ser Preenchido",
            "Instituicao.required" => "O Campo Instituição deve ser Preenchido",
            "telefone.required" => "O Campo Telefone deve ser Preenchido",

        ];
    }
}
