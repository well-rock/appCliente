<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelefoneRequest extends FormRequest
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
    public function messages()
    {
        return [
            'titulo.required'=>'Preencha um título',
            'titulo.max'=>'Título deve ter até 255 caracteres',
            'telefone.required'=>'Preencha um número de Telefone'
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
            'titulo'=>'required|max:255',
            'telefone'=>'required'
        ];
    }
}
