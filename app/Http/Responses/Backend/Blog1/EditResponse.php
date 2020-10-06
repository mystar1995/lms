<?php

namespace App\Http\Responses\Backend\Blog1;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    protected $blog1;

    protected $status;

    protected $blog1Tags;

    protected $blog1Categories;

    public function __construct($blog1, $status, $blog1Categories, $blog1Tags)
    {
        $this->blog1 = $blog1;
        $this->status = $status;
        $this->blog1Tags = $blog1Tags;
        $this->blog1Categories = $blog1Categories;
    }

    public function toResponse($request)
    {
        $selectedCategories = $this->blog1->categories->pluck('id')->toArray();
        $selectedtags = $this->blog1->tags->pluck('id')->toArray();

        return view('backend.blog1s.edit')->with([
            'blog1'               => $this->blog1,
            'blog1Categories'     => $this->blog1Categories,
            'blog1Tags'           => $this->blog1Tags,
            'selectedCategories' => $selectedCategories,
            'selectedtags'       => $selectedtags,
            'status'             => $this->status,
        ]);
    }
}
