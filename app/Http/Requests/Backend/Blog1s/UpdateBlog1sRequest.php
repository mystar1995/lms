<?php

namespace App\Http\Requests\Backend\Blog1s;

use App\Http\Requests\Request;

/**
 * Class UpdateBlog1sRequest.
 */
class UpdateBlog1sRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-blog1');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|max:191|unique:blog1s,name,'.$this->segment(3),
            'publish_datetime'  => 'required|date',
            'content'           => 'required',
            'categories'        => 'required',
            'tags'              => 'required',
        ];
    }

    /**
     * Get the validation message that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.unique'   => 'Blog1 name already exists, please enter a different name.',
            'name.required' => 'Please insert Blog1 Title',
            'name.max'      => 'Blog1 Title may not be greater than 191 characters.',
        ];
    }
}
