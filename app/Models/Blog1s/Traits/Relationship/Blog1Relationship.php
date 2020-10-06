<?php

namespace App\Models\Blog1s\Traits\Relationship;

use App\Models\Access\User\User;
use App\Models\Blog1Categories\Blog1Category;
use App\Models\Blog1Tags\Blog1Tag;

/**
 * Class Blog1Relationship.
 */
trait Blog1Relationship
{
    /**
     * Blog1s has many relationship with categories.
     */
    public function categories()
    {
        return $this->belongsToMany(Blog1Category::class, 'blog1_map_categories', 'blog1_id', 'category_id');
    }

    /**
     * Blog1s has many relationship with tags.
     */
    public function tags()
    {
        return $this->belongsToMany(Blog1Tag::class, 'blog1_map_tags', 'blog1_id', 'tag_id');
    }

    /**
     * Blog1s belongsTo with User.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
