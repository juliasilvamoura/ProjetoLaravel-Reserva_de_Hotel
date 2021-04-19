<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
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
            'data_chegada' => 'required',
            'data_saida'=> 'required',
            'cliente_id'=> 'required',
            'quarto_id'=> 'required',
            'pagamento_id'=> 'required',
        ];
    }
}
