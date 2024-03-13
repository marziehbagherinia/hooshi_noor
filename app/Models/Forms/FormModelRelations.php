<?php

namespace App\Models\Forms;

use App\Models\FormSkills\FormSkill;
use App\Models\FormEducations\FormEducation;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait FormModelRelations
{
    /**
     * @return HasMany
     */
    public function formEducations(): HasMany
    {
        return $this->hasMany( FormEducation::class, 'form_id', 'id' );
    }

    /**
     * @return HasMany
     */
    public function formSkills(): HasMany
    {
        return $this->hasMany( FormSkill::class, 'form_id', 'id' );
    }
}
