<?php

namespace App\Models\Blog1Categories\Traits\Relationship;

use App\Models\Access\User\User;

/**
 * Class Blog1CategoryRelationship.
 */
trait Blog1CategoryRelationship
{
    /**
     * Blog1Categories belongs to relationship with state.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
