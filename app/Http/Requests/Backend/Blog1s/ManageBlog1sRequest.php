<?php

namespace App\Http\Requests\Backend\Blog1s;

use App\Http\Requests\Request;

/**
 * Class ManageBlog1sRequest.
 */
class ManageBlog1sRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('view-blog1');
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
