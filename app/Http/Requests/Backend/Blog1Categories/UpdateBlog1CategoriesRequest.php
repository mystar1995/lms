<?php

namespace App\Http\Requests\Backend\Blog1Categories;

use App\Http\Requests\Request;

/**
 * Class UpdateBlog1CategoriesRequest.
 */
class UpdateBlog1CategoriesRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-blog1-category');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:191|unique:blog1_categories,name,'.$this->segment(3),
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.unique'   => 'Blog1 category name already exists, please enter a different name.',
            'name.required' => 'Blog1 category name must required',
            'name.max'      => 'Blog1 category may not be greater than 191 characters.',
        ];
    }
}
