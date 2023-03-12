<?php

namespace App\Domains\Category\Models;

use App\Domains\Category\Traits\Relationships\SubCategoryRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SubCategory
 *
 * @property integer id
 * @property string  name
 * @property integer category_id
 * @property text    description
 */
class SubCategory extends Model
{
    use SoftDeletes,
        SubCategoryRelationship;

    protected $table = 'sub_category';

    protected $fillable = [
        'name_sub_category',
        'category_id',
        'description'
    ];
}
