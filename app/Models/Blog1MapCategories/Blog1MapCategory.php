<?php

namespace App\Models\Blog1MapCategories;

use App\Models\BaseModel;

class Blog1MapCategory extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog1_map_categories';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
