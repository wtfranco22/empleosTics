<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRubro extends FormRequest
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
            'descripcion'=>'required|max:50'
        ];
    }

    public function messages()
    {
        return[
            'descripcion.required'=>'Ingrese el nombre del rubro',
            'descripcion.max:50'=>'Exedio la cantidad de letras'
        ];
    }
}
