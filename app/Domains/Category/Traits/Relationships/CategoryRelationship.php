<?php

namespace App\Domains\Category\Traits\Relationships;

use App\Domains\Category\Models\SubCategory;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait CategoryRelationship
{
    /**
     * @return HasMany
     */
    public function subCategory(): HasMany
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'category_id');
    }
}
