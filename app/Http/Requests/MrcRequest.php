<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MrcRequest extends FormRequest
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
            'description' => ['required','regex:/^[a-zA-Z0-9\s\-\+\(\)]*$/','min:10']
        ];
    }
}
