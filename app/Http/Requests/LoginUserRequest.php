<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            'name'     => 'required|min:3',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'Nazwa użytkownika jest wymagana',
            'name.min'          => 'Minimalna ilosc znakow :min',
            'password.required' => 'Pole jest wymagane',
        ];
    }
}
