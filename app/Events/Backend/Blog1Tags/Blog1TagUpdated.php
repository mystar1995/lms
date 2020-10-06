<?php

namespace App\Events\Backend\Blog1Tags;

use Illuminate\Queue\SerializesModels;

/**
 * Class Blog1TagUpdated.
 */
class Blog1TagUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $blog1tag;

    /**
     * @param $blog1tag
     */
    public function __construct($blog1tag)
    {
        $this->blog1tag = $blog1tag;
    }
}
