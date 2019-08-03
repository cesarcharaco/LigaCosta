<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorRequest extends FormRequest
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
            'rut' => 'required|unique:jugador',
            'edad' => 'required|numeric|min:10|max:25',
            'genero' => 'required',
            'posicion' => 'required',
            'num_camiseta' => 'required|numeric|unique:jugador'
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
            'edad.max' => 'La edad debe ser menor a 80 años de edad',
            'genero.required' => 'Debe seleccionar el Género',
            'posicion.required' => 'Debe indicar la Posición',
            'num_camiseta.required' => 'Debe ingresar el Número de la Camiseta',
            'num_camiseta.numeric' => 'El Número de la Camiseta debe contener sólo números'
        ];
    }
}
