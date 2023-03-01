<?php

namespace App\Domains\Category\Traits\Relationships;

use App\Domains\Category\Models\Category;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait CategoryRelationship
{
    /**
     * Retrieve subcategories
     *
     * @return HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id', 'category_id')->with('children');
    }
}
