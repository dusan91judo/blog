<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkolaRequest extends FormRequest
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
            'naziv_skole' => 'required',
            'ulica' => 'required',
            'broj' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'naziv_skole.required' => 'Ime je obavezno polje',
            'ulica.required'  => 'Prezime je obavezno polje',
            'broj.required'  => 'Godiste je obavezno polje',
            'broj.numeric'  => 'Godiste mora da bude broj',
        ];
    }
}
