<?php

namespace Modules\Category\Traits\Relationships;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Category\Entities\MainCategory;

trait SubCategoryRelationship
{
    /**
     * @return BelongsTo
     */
    public function mainCategory(): BelongsTo
    {
        return $this->belongsTo(MainCategory::class, 'category_id', 'id');
    }
}
