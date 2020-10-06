<?php

namespace App\Http\Responses\Backend\Blog1Tag;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Blog1Tags\Blog1Tag
     */
    protected $blog1Tag;

    /**
     * @param \App\Models\Blog1Tags\Blog1Tag $blog1Tag
     */
    public function __construct($blog1Tag)
    {
        $this->blog1Tag = $blog1Tag;
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
        return view('backend.blog1tags.edit')
            ->with('blog1tag', $this->blog1Tag);
    }
}
