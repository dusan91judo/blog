<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BibliotekaRequest extends FormRequest
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
            'naziv' => 'required',
            'ulica' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'naziv.required' => 'Ime je obavezno polje',
            'ulica.required'  => 'Prezime je obavezno polje',
        ];
    }
}
