<?php

namespace App\Domains\Category\Http\Controllers;

use App\Domains\Category\Http\Requests\SubCategoryRequest;
use App\Domains\Category\Interface\CategoryServiceInterface;
use App\Domains\Category\Interface\SubCategoryServiceInterface;
use App\Helpers\Common\Common;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected $subCategoryService;
    protected $categoryService;
    public function __construct(
        SubCategoryServiceInterface $subCategoryServiceInterface,
        CategoryServiceInterface $categoryServiceInterface
    ){
        $this->subCategoryService = $subCategoryServiceInterface;
        $this->categoryService = $categoryServiceInterface;
    }

    public function index(Request $request)
    {
        $subCategories = $this->subCategoryService->getSubCategoryAndRelationMainCategory();
        $subCategories->each(function ($item) {
            $item->setAttribute('main_category', $item->category->name);
        });
        if ($request->ajax()) {
            $view = view('category.table.table_sub_category', compact('subCategories'))->render();
            return response()->json([
                'html' => $view
            ]);
        }
        return view('category.sub_category.index', compact('subCategories'));
    }

    /**
     * Page create sub category
     * Compact: categories
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = $this->categoryService->getCategory();
        return view('category.sub_category.create', compact('categories'));
    }

    /**
     * Create sub category
     *
     * @param SubCategoryRequest $subCategoryRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SubCategoryRequest $subCategoryRequest)
    {
        $result = $this->subCategoryService->store($subCategoryRequest);
        return Common::responseToast('subCategory.create', 'store', $result);
    }

}
