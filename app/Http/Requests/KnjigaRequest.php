<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KnjigaRequest extends FormRequest
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
        //dd($this->all());
        return [
            'naziv' => 'required',
            'autor' => 'required',
            'broj_strana' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'naziv.required' => 'Naziv je obavezno polje',
            'autor.required'  => 'Autor je obavezno polje',
            'broj_strana.required'  => 'Broj strana je obavezno polje',
            'broj_strana.numeric'  => 'Broj strana mora da bude broj',

        ];
    }
}
