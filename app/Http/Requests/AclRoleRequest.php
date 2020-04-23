<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AclRoleRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                return [
                    'name'  => 'required|unique:acl_roles,name',
                    'label' => 'required|unique:acl_roles,label',
                ];
                break;
            case 'PUT':
                return [
                    'name'  => "unique:acl_roles,name,{$this->route('uid')},uid",
                    'label' => "unique:acl_roles,label,{$this->route('uid')},uid",
                ];
                break;
        }
    }
}
