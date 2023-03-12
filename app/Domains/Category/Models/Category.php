<?php

namespace App\Domains\Category\Models;

use App\Domains\Category\Traits\Relationships\CategoryRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 *
 * @property integer     category_id
 * @property string      name
 * @property integer     parent_id
 * @property integer     sequence
 * @property text        description
 * @property tinyInteger status
 */
class Category extends Model
{
    use SoftDeletes,
        CategoryRelationship;

    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $keyType = 'integer';

    public $incrementing = true;
    protected $fillable = [
        'name',
        'description',
    ];
}
