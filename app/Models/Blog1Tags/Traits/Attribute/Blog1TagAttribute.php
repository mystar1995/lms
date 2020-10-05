<?php

namespace App\Models\Blog1Tags\Traits\Attribute;

/**
 * Class Blog1TagAttribute.
 */
trait Blog1TagAttribute
{
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                    '.$this->getEditButtonAttribute('edit-blog1-tag', 'admin.blog1Tags.edit').'
                    '.$this->getDeleteButtonAttribute('delete-blog1-tag', 'admin.blog1Tags.destroy').'
                </div>';
    }

    /**
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        if ($this->isActive()) {
            return "<label class='label label-success'>".trans('labels.general.active').'</label>';
        }

        return "<label class='label label-danger'>".trans('labels.general.inactive').'</label>';
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->status == 1;
    }
}
