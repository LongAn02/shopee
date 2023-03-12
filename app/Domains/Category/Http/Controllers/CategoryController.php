<?php

namespace App\Domains\Category\Http\Controllers;

use App\Domains\Category\Http\Requests\CategoryRequest;
use App\Domains\Category\Interface\CategoryServiceInterface;
use App\Helpers\Common\Common;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(
        CategoryServiceInterface $categoryServiceInterface
    ) {
        $this->categoryService = $categoryServiceInterface;
    }

    /**
     * Get all category
     * Compact: categories
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = $this->categoryService->getCategoryAndRelationSubCategory();
        $categories->each(function ($item) {
             $item->SetAttribute('number_sub_category', $item->subCategory->count());
        });
        return view('category.main_category.index', compact('categories'));
    }

    /**
     * Page create main category
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('category.main_category.create');
    }

    /**
     * Create main category
     *
     * @param CategoryRequest $categoryRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryRequest $categoryRequest)
    {
        $result = $this->categoryService->store($categoryRequest);
        return Common::responseToast('category.create', 'store', $result);
    }
}
