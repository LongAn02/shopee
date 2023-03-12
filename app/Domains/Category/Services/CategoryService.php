<?php

namespace App\Domains\Category\Services;

use App\Domains\Category\Interface\CategoryServiceInterface;
use App\Domains\Category\Models\Category;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryService extends BaseService implements CategoryServiceInterface
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    /**
     * Create main category
     *
     * @param $dataRequest
     * @return bool
     */
    public function store($dataRequest)
    {
        DB::beginTransaction();
        try {
            $this->create($dataRequest->only($this->model->fillable));
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("msg: {$e->getMessage()} --line: {$e->getLine()}");
            return false;
        }
    }

    /**
     * Get all category
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getCategory()
    {
        return $this->all();
    }

    public function getCategoryAndRelationSubCategory()
    {
        return $this->with(['subCategory'])->paginate(10);
    }
}
