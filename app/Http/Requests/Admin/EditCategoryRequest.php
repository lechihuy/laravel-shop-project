<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EditCategoryRequest extends FormRequest
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
            'name' => "required|unique:categories,name,{$this->category}",
            'parent_id' => 'sometimes|nullable|exists:categories,id'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'tên danh mục',
            'parent_id' => 'danh mục cha'
        ];
    }
}