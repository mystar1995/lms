<?php

namespace App\Models\Blog1Tags;

use App\Models\BaseModel;
use App\Models\Blog1Tags\Traits\Attribute\Blog1TagAttribute;
use App\Models\Blog1Tags\Traits\Relationship\Blog1TagRelationship;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog1Tag extends BaseModel
{
    use ModelTrait,
        SoftDeletes,
        Blog1TagAttribute,
        Blog1TagRelationship{
            // Blog1TagAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    protected $fillable = ['name', 'status', 'created_by', 'updated_by'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('module.blog1_tags.table');
    }
}
