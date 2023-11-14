<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntrepriseRequest extends FormRequest
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
            'nom' => ['required', 'regex:/^[a-zA-Z\s\-\+\(\)]*$/','min:3'],
            'ville' => ['required','regex:/^[a-zA-Z\s\-\+\(\)]*$/','min:3'],
            'code_postal' => ['required', 'regex:/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/'],
            'adresse_complete' => ['required','regex:/^[a-zA-Z0-9\s\-\+\(\)]*$/','min:10'],
            'telephone' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:12'],
            'courriel' => 'email',
            'description' => ['required','regex:/^[a-zA-Z0-9\s\-\+\(\)]*$/','min:10'],
            'site_web' => 'url',
            'mrc_id' => '',
            'typeEntreprise_id' => '',
            'typeCommodite_id' => '',
            'user_id'
        ];
    }
}
