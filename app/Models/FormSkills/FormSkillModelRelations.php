<?php

namespace App\Models\FormSkills;

use App\Models\Forms\Form;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait FormSkillModelRelations
{
    /**
     * @return HasOne
     */
    public function form(): HasOne
    {
        return $this->hasOne( Form::class, 'id', 'form_id' );
    }
}
