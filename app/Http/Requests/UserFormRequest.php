<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|unique:users',
            'email'=>'required|email',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Campo obrigatório',
            'email.required'=>'Campo obrigatório',
            'email.email'=>'E-mail inválido',
            'password.required'=>'Campo obrigatório'
        ];
    }
}
