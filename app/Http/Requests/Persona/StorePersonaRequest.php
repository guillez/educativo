<?php

namespace App\Http\Requests\Persona;

use App\Http\Requests\Request;

class StorePersonaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return auth()->user()->hasRole('administrator');
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
            'nombre' => 'required'
        ];
    }
}