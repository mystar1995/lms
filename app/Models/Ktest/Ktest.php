<?php

namespace App\Models\Ktest;

use App\Models\BaseModel;
use App\Models\Ktest\Traits\Attribute\FaqAttribute;
use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ktest extends BaseModel
{
    // use ModelTrait,
    //     SoftDeletes,
    //     FaqAttribute {
    //         // FaqAttribute::getEditButtonAttribute insteadof ModelTrait;
    //     }

    protected $table = 'ktest';
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'desc'];
}
