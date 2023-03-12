<?php

namespace App\Domains\Category\Services;

use App\Domains\Category\Interface\SubCategoryServiceInterface;
use App\Domains\Category\Models\SubCategory;
use App\Services\BaseService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SubCategoryService extends BaseService implements SubCategoryServiceInterface
{
    public function __construct(SubCategory $subCategory)
    {
        $this->model = $subCategory;
    }

    /**
     * Create sub category
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

    public function getSubCategoryAndRelationMainCategory()
    {
        return $this->with(['category'])->paginate(10);
    }
}
