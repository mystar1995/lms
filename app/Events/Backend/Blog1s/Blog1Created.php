<?php

namespace App\Events\Backend\Blog1s;

use Illuminate\Queue\SerializesModels;

/**
 * Class Blog1Created.
 */
class Blog1Created
{
    use SerializesModels;

    /**
     * @var
     */
    public $blog1s;

    /**
     * @param $blog1s
     */
    public function __construct($blog1s)
    {
        $this->blog1s = $blog1s;
    }
}
