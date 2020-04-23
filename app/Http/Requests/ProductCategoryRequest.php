<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
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
                    'name'  => 'required|unique:product_categories,name',
                    'color' => 'size:7',
                ];
                break;
            case 'PUT':
                return [
                    'name'  => "unique:product_categories,name,{$this->route('uid')},uid",
                    'color' => 'size:7',
                ];
                break;
        }
    }
}
