<?php

namespace App\Events\Backend\Blog1Categories;

use Illuminate\Queue\SerializesModels;

/**
 * Class Blog1CategoryUpdated.
 */
class Blog1CategoryUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $blog1category;

    /**
     * @param $blog1category
     */
    public function __construct($blog1category)
    {
        $this->blog1category = $blog1category;
    }
}
