<?php

namespace App\Http\Responses\Backend\SpeakUp;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\SpeakUp\Speakup
     */
    protected $speakups;

    /**
     * @param App\Models\SpeakUp\Speakup $speakups
     */
    public function __construct($speakups)
    {
        $this->speakups = $speakups;
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
        return view('backend.speakups.edit')->with([
            'speakups' => $this->speakups
        ]);
    }
}