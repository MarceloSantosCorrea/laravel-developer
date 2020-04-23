<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AclPermissionRequest extends FormRequest
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
                    'name'  => 'required|unique:acl_permissions,name',
                    'label' => 'required|unique:acl_permissions,label',
                ];
                break;
            case 'PUT':
                return [
                    'name'  => "unique:acl_permissions,name,{$this->route('uid')},uid",
                    'label' => "unique:acl_permissions,label,{$this->route('uid')},uid",
                ];
                break;
        }
    }
}
