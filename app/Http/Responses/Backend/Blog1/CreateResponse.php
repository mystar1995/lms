<?php

namespace App\Http\Responses\Backend\Blog1;

use Illuminate\Contracts\Support\Responsable;

class CreateResponse implements Responsable
{
    protected $status;

    protected $blog1Tags;

    protected $blog1Categories;

    public function __construct($status, $blog1Categories, $blog1Tags)
    {
        $this->status = $status;
        $this->blog1Tags = $blog1Tags;
        $this->blog1Categories = $blog1Categories;
    }

    public function toResponse($request)
    {
        return view('backend.blog1s.create')->with([
            'blog1Categories' => $this->blog1Categories,
            'blog1Tags'       => $this->blog1Tags,
            'status'         => $this->status,
        ]);
    }
}
