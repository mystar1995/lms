<?php

namespace App\Http\Requests\Backend\Blog1Tags;

use App\Http\Requests\Request;

/**
 * Class UpdateBlog1TagsRequest.
 */
class UpdateBlog1TagsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-blog1-tag');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:191|unique:blog1_tags,name,'.$this->segment(3),
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
            'name.unique'   => 'Blog1 Tag name already exists, please enter a different name.',
            'name.required' => 'Blog1 Tag name is a required field.',
            'name.max'      => 'Blog1 Tag may not be greater than 191 characters.',
        ];
    }
}
