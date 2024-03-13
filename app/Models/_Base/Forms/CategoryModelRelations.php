<?php

namespace App\Models\Forms;

use App\Models\MainCategories\MainCategory;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait CategoryModelRelations
{
    /**
     * @return HasOne
     */
    public function mainCategory(): HasOne
    {
        return $this->hasOne( MainCategory::class, 'id', 'main_category_id' );
    }
}
