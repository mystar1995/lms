<?php

namespace App\Models\Blog1s\Traits\Attribute;

/**
 * Class Blog1Attribute.
 */
trait Blog1Attribute
{
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">'.
                $this->getEditButtonAttribute('edit-blog1', 'admin.blog1s.edit').
                $this->getDeleteButtonAttribute('delete-blog1', 'admin.blog1s.destroy').
                '</div>';
    }
}
