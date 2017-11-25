<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesorRequest extends FormRequest
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
            'ime' => 'required',
            'prezime' => 'required',
            'godiste' => 'required|numeric',
            'skola' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'ime.required' => 'Ime je obavezno polje',
            'prezime.required'  => 'Prezime je obavezno polje',
            'godiste.required'  => 'Godiste je obavezno polje',
            'godiste.numeric'  => 'Godiste mora da bude broj',
        ];
    }
}
