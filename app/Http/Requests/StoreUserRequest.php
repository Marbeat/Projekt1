<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        $user = \Auth::user();
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => 'unique:users,email,' . $user->id,
            'phone_number' => 'unique:users,phone_number,' . $user->id,
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Adres e-mail jest wymagany!',
            'name.required' => 'Nazwa użytkownika jest wymagana!',
            'email.unique' => 'Użytkownik o podanym adresie e-mail jest już zarejestrowany!',
            'phone_number.unique' => 'Użytkownik o podanym numerze telefonu jest już zarejestrowany!'
        ];
    }
}
