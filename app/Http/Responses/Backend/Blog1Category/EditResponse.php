<?php

namespace App\Http\Responses\Backend\Blog1Category;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Blog1Categories\Blog1Category
     */
    protected $blog1Category;

    /**
     * @param \App\Models\Blog1Categories\Blog1Category $blog1Category
     */
    public function __construct($blog1Category)
    {
        $this->blog1Category = $blog1Category;
    }

    /**
     * toReponse.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.blog1categories.edit')
            ->with('blog1category', $this->blog1Category);
    }
}
