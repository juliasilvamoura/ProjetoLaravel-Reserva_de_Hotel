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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:100',
            'cpf'=> 'required|string|max:15',
            'telefone'=> 'required|string|max:20',
            'endereco'=> 'required|string|max:100',
            'bairro'=> 'required|string|max:100',
            'numero'=> 'required|string|max:20', 
            'cidade'=> 'required|string|max:100',
            'estado'=> 'required|string|max:100',
        ];
    }
}
