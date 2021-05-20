<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusqueda extends FormRequest
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
            'empresa'=>'required|max:150',
            'titulo'=>'required|max:150',
            'descripcion'=>'required|max:150'
        ];
    }

    public function messages()
    {
        return[
            'empresa.required'=>'Ingrese el nombre de la empresa',
            'empresa.max:150'=>'Exedio la cantidad de caracteres',
            'titulo.required'=>'Ingrese el titulo de la busqueda',
            'titulo.max:150'=>'Exedio la cantidad de caracteress',
            'descripcion.required'=>'Ingrese el nombre de la descripcion',
            'descripcion.max:150'=>'Exedio la cantidad de caracteres'
        ];
    }
}
