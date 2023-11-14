<?php

namespace App\Http\Requests;

use App\Models\Evenement;
use Illuminate\Foundation\Http\FormRequest;

class EvenementRequest extends FormRequest
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
            'nom' => ['required', 'regex:/^[a-zA-Z0-9\s\-\+\(\)]*$/','min:3'],
            'ville' => ['required','regex:/^[a-zA-Z\s\-\+\(\)]*$/','min:3'],
            'emplacement_id' => '',
            'description' => ['required','regex:/^[a-zA-Z0-9\s\-\+\(\)]*$/','min:10'],
            'prix' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:1'],
            'date_debut' => '',
            'date_fin' => ''
        ];
    }
}
