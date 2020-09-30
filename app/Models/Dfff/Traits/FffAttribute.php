<?php

namespace App\Models\Dfff\Traits;

/**
 * Class FffAttribute.
 */
trait FffAttribute
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
                '.$this->getEditButtonAttribute("edit-fff", "admin.fffs.edit").'
                '.$this->getDeleteButtonAttribute("delete-fff", "admin.fffs.destroy").'
                </div>';
    }
}
