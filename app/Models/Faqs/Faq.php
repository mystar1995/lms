<?php

namespace App\Models\Faqs;

use App\Models\BaseModel;
use App\Models\Faqs\Traits\Attribute\FaqAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends BaseModel
{
    use ModelTrait,
        SoftDeletes,
        FaqAttribute {
            // FaqAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['testcate','question_name', 'question_text', 'c1','g1','f1','c2','g2','f2','c3','g3','f3','c4','g4','f4','c5','g5','f5', 'status'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('module.faqs.table');
    }
}
