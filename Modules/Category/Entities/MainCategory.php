<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Category\Traits\Attributes\MainCategoryAttribute;
use Modules\Category\Traits\Relationships\MainCategoryRelationship;
use Plank\Mediable\Mediable;

/**
 * Class MainCategory
 * @property string name
 * @property string description
 */
class MainCategory extends Model
{
    use HasFactory,
        SoftDeletes,
        Mediable,
        MainCategoryRelationship,
        MainCategoryAttribute;

    protected $table = 'main_categories';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'description'
    ];
}
