<?php

namespace App\Models\FormEducations;

use App\Models\Forms\Form;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait FormEducationModelRelations
{
    /**
     * @return HasOne
     */
    public function form(): HasOne
    {
        return $this->hasOne( Form::class, 'id', 'form_id' );
    }
}
