<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Category\Traits\Relationships\SubCategoryRelationship;

class SubCategory extends Model
{
    use HasFactory,
        SoftDeletes,
        SubCategoryRelationship;

    protected $table = 'sub_categories';

    protected $fillable = [
        'name_sub_category',
        'category_id',
        'description'
    ];
}
