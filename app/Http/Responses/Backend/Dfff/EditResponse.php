<?php

namespace App\Http\Responses\Backend\Dfff;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Dfff\Fff
     */
    protected $fffs;

    /**
     * @param App\Models\Dfff\Fff $fffs
     */
    public function __construct($fffs)
    {
        $this->fffs = $fffs;
    }

    /**
     * To Response
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.fffs.edit')->with([
            'fffs' => $this->fffs
        ]);
    }
}