<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuartoRequest extends FormRequest
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
            'numero_quarto' => 'required|string|max:4',
            'tipo_quarto'=> 'required|string|max:100',
            
        ];
    }
}
