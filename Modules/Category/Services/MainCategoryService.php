<?php

namespace Modules\Category\Services;

use App\Services\BaseService;
use Modules\Category\Entities\MainCategory;
use Modules\Category\Interfaces\MainCategoryServiceInterface;

class MainCategoryService extends BaseService implements MainCategoryServiceInterface
{
    public function __construct(MainCategory $model)
    {
        $this->model = $model;
    }
}
