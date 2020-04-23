<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $languages = \Helpers::languagesToArray();

        switch ($this->method()) {
            case 'POST':
                return [
                    'firstname' => 'required|min:3',
                    'email'     => 'required|email|unique:users,email',
                    'password'  => 'required|min:8',
                    'avatar'    => 'file|mimetypes:image/jpeg',
                    'language'  => ['required', Rule::in($languages)],
                ];
                break;
            case 'PUT':
                return [
                    'firstname' => 'min:3',
                    'email'     => "email|unique:users,email,{$this->route('uid')},uid",
                    'password'  => 'min:8',
                    'avatar'    => 'file|mimetypes:image/jpeg',
                    'language'  => [Rule::in($languages)],
                ];
                break;
        }
    }

    public function messages()
    {
        return [
            'language.in' => "The selected language is invalid. Suggested: ".
                implode(', ', \Helpers::languagesToArray()),
        ];
    }
}
