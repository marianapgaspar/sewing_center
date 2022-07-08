<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Campo obrigatório',
            'email.required'=>'Campo obrigatório',
            'email.email'=>'E-mail inválido',
            'message.required'=>'Campo obrigatório'
        ];
    }
}
