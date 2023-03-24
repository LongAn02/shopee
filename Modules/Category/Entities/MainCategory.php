<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainCategory extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'main_categories';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'description'
    ];
}
