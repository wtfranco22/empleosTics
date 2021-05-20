<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInscripcion extends FormRequest
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
            'apellido'=>'required|max:50',
            'nombre'=>'required|max:50'
        ];
    }
    public function messages()
    {
        return[
            'nombre.required'=>'Ingrese su nombre',
            'nombre.max:150'=>'Exedio la cantidad de caracteres',
            'apellido.required'=>'Ingrese su apellido',
            'apellido.required'=>'Exedio la cantidad de caracteres'
        ];
    }
}
