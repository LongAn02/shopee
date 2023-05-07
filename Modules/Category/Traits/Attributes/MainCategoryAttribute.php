<?php

namespace Modules\Category\Traits\Attributes;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait MainCategoryAttribute
{
    /**
     * @return Attribute
     */
    public function countSubCategory(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->subCategories->count(),
        );
    }
}
