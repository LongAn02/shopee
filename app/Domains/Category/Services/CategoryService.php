<?php

namespace App\Domains\Category\Services;

use App\Domains\Category\Models\Category;
use App\Services\BaseService;
class CategoryService extends BaseService
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function getCategories()
    {
        $categories = $this->model->whereNull('parent_id')
            ->with(['children'])
            ->get();

        return view('frontend.frame', compact('categories'));
    }
}
