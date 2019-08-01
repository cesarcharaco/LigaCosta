<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachsRequest extends FormRequest
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'rut' => 'required|unique:coach',
            'edad' => 'required|numeric|min:18|max:80'
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'Los Nombres es obligatorio',
            'apellidos.required' => 'Los Apellidos son obligatorios',
            'rut.required' => 'El RUT  es obligatorio',
            'rut.unique' => 'El RUT  ya se encuentra registrado',
            'edad.required' => 'La Edad es Obligatoria',
            'edad.numeric' => 'Debe ingresar sólo números en el campo Edad',
            'edad.min' => 'La edad debe ser mayor a 18 años de edad',
            'edad.max' => 'La edad debe ser menor a 80 años de edad'
        ];
    }
}
