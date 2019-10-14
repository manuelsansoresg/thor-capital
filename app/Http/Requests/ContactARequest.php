<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactARequest extends FormRequest
{
   /* public function attributes()
    {
        return [
            'name' => 'valor',
            'order' => 'orden',
        ];
    }*/

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
            'titulo' => 'required',
            'nombre_formulario' => 'required',
            'email_formulario' => 'required',
            'telefono_formulario' => 'required',
            'mensaje_formulario' => 'required',
            'direccion' => 'required',
            'contenido_direccion' => 'required',
            'telefono' => 'required',
            'contenido_telefono' => 'required',
            'email' => 'required',
            'contenido_email' => 'required',
            'imagen' => 'image|mimes:jpg,jpeg,png',

        ];
    }
}
