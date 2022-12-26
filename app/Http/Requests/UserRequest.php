<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
    public function rules()
    {
        return [
            'name' => ['required','max:100','min:3'],
            'email' => ['required','email','unique:utentes'],
        ];

    }

    public function messages()
    {
        return[
            "nome.required" => "O Campo nome do Cliente deve ser Preenchido",
            "email.required" => "O Campo Email deve ser Preenchido",

        ];
    }
}
