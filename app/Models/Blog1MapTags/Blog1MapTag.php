<?php

namespace App\Models\Blog1MapTags;

use App\Models\BaseModel;

class Blog1MapTag extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog1_map_tags';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
