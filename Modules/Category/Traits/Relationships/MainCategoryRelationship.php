<?php

namespace Modules\Category\Traits\Relationships;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Category\Entities\SubCategory;

trait MainCategoryRelationship
{
    /**
     * @return HasMany
     */
    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'category_id');
    }
}
