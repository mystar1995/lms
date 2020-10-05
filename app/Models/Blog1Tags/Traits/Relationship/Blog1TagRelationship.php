<?php

namespace App\Models\Blog1Tags\Traits\Relationship;

use App\Models\Access\User\User;

/**
 * Class Blog1TagRelationship.
 */
trait Blog1TagRelationship
{
    /**
     * Blog1Tags belongs to relationship with state.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
