<?php

namespace App\Domains\Category\Traits\Relationships;

use App\Domains\Category\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait SubCategoryRelationship
{
    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
