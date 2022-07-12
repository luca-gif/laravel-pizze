<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'price' => 'required|numeric',
            'popularity' => 'nullable|numeric',
            'ingredients' => 'required'
        ];
    }

    public function messages()
    {

        return [
            'name.required' => 'Campo obbligatorio',
            'name.min' => 'Inserisci almeno :min caratteri',
            'name.max' => 'Inserisci al massimo :max caratteri',
            'price.required' => 'Inserisci il prezzo',
            'price.numeric' => 'Inserisci un valore numerico',
            'popularity.numeric' => 'Inserisci un valore numerico',
            'ingredients.required' => 'Inserisci almeno un ingrediente!'
        ];
    }
}
