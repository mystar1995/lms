<?php

namespace App\Models\Blog1Categories;

use App\Models\BaseModel;
use App\Models\Blog1Categories\Traits\Attribute\Blog1CategoryAttribute;
use App\Models\Blog1Categories\Traits\Relationship\Blog1CategoryRelationship;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog1Category extends BaseModel
{
    use ModelTrait,
        SoftDeletes,
        Blog1CategoryAttribute,
        Blog1CategoryRelationship {
            // Blog1CategoryAttribute::getEditButtonAttribute insteadof ModelTrait;
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
        $this->table = config('module.blog1_categories.table');
    }
}
