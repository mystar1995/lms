<?php

namespace App\Models\Blog1s;

use App\Models\BaseModel;
use App\Models\Blog1s\Traits\Attribute\Blog1Attribute;
use App\Models\Blog1s\Traits\Relationship\Blog1Relationship;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog1 extends BaseModel
{
    use ModelTrait,
        SoftDeletes,
        Blog1Attribute,
        Blog1Relationship {
            // Blog1Attribute::getEditButtonAttribute insteadof ModelTrait;
        }

    protected $fillable = [
        'name',
        'slug',
        'publish_datetime',
        'content',
        'meta_title',
        'cannonical_link',
        'meta_keywords',
        'meta_description',
        'status',
        'featured_image',
        'created_by',
    ];

    protected $dates = [
        'publish_datetime',
        'created_at',
        'updated_at',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('module.blog1s.table');
    }
}
