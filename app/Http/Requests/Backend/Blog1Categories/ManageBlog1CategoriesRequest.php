<?php

namespace App\Http\Requests\Backend\Blog1Categories;

use App\Http\Requests\Request;

/**
 * Class ManageBlog1CategoriesRequest.
 */
class ManageBlog1CategoriesRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-blog1-category');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
