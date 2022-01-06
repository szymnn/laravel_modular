<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name' => 'required|min:3',
            'password' => 'required|min:6|confirmed',
            'email' => 'required|unique:users',
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'Nazwa użytkownika jest wymagana',
            'name.min'          => 'Minimalna ilosc znakow :min',
            'email.required'    => 'Pole email jest wymagana',
            'email.unique'      => 'Adres email jest już zarejestrowany',
            'password.required' => 'Pole jest wymagane',
            'password.confirmed'=> 'Hasła nie są identyczne.',
            'password.min'      => 'Minimalna długość hasła to :min znaków',
        ];
    }
}
