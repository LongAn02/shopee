<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'sub_categories';

    protected $fillable = [
        'name_sub_category',
        'category_id',
        'description'
    ];
}
