<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class FaqsResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'question_name'      => $this->question_name,
            'question_text'        => $this->question_text,
            'testcate'        => $this->question_text,
            'status'        => ($this->isActive()) ? 'Active' : 'InActive',
            'created_at'    => $this->created_at->toDateString(),
        ];
    }
}
