<?php

namespace App\Models\Bb\Traits;

/**
 * Class BbAttribute.
 */
trait BbAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/5.4/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                '.$this->getEditButtonAttribute("edit-bb", "admin.bbs.edit").'
                '.$this->getDeleteButtonAttribute("delete-bb", "admin.bbs.destroy").'
                </div>';
    }
}
