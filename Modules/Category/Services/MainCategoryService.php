<?php

namespace Modules\Category\Services;

use App\Services\BaseService;
use App\Services\Media\Interfaces\MediaInterface;
use App\Traits\Common;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Category\Entities\MainCategory;
use Modules\Category\Interfaces\MainCategoryServiceInterface;

class MainCategoryService extends BaseService implements MainCategoryServiceInterface
{
    use Common;

    protected $mediaService;

    public function __construct(
        MainCategory   $model,
        MediaInterface $mediaService
    ) {
        $this->model        = $model;
        $this->mediaService = $mediaService;
    }

    public function getAllMainCategory()
    {
        $categories = $this->all();
        return $categories;
    }

    /**
     * @param $request
     * @param $id
     * @return array
     */
    public function handleMainCategory($request, $id)
    {
        $method = $request->method();

        switch ($method) {
            case METHOD_POST:
                $result = $this->store($request);
                break;
            case METHOD_PUT:
                break;
            case METHOD_DELETE:
                break;
        }

        return $result;
    }

    /**
     * @param $request
     * @return array
     */
    public function store($request)
    {
        DB::beginTransaction();
        try {
            $category = $this->create($request->only($this->model->getFillable()));
            $media = $this->mediaService->upload($request->file('image'), directory: 'main-category');
            $category->syncMedia($media, 'image');

            DB::commit();

            $result['status'] = "success";
            $result['msg'] = "Create Successfully";
        } catch (\Exception $e) {
            Log::error("Erro: {$e->getMessage()} ---line: {$e->getLine()}");
            DB::rollBack();
            $result['status'] = "error";
            $result['msg'] = "Create Failed";
        }

        return $result;
    }

    public function show($id)
    {
        $category = $this->with('subCategories')->where('category_id', $id)->first();
        $category->setAttribute('numberSubCategory', $category->subCategories->count());
        return $category;
    }
}
