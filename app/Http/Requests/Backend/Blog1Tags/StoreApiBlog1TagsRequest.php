<?php

namespace App\Http\Requests\Backend\Blog1Tags;

use App\Http\Requests\Request;

/**
 * Class StoreBlog1TagsRequest.
 */
class StoreApiBlog1TagsRequest extends Request
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
            'name' => 'required|max:191',
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
            'name.required' => 'Blog1 Tag name is a required field.111111',
            'name.max'      => 'Blog1 Tag may not be greater than 191 characters.',
        ];
    }
}
