<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\MainCategory;
use Modules\Category\Http\Requests\MainCategoryRequest;
use Modules\Category\Interfaces\MainCategoryServiceInterface;

class MainCategoryController extends Controller
{
    protected $mainCategoryService;

    public function __construct(
        MainCategoryServiceInterface $mainCategoryService
    ) {
        $this->mainCategoryService = $mainCategoryService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $mainCategories = $this->mainCategoryService->getAllMainCategory();
        return view('category::main_category.index', compact('mainCategories'));
    }

    public function create()
    {
        return view('category::main_category.create');
    }

    /**
     * Handle: store|update|destroy
     *
     * @param MainCategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(MainCategoryRequest $request, $id = null)
    {
        $result = $this->mainCategoryService->handleMainCategory($request, $id);
        return response()->json($result);
    }

    public function show($id)
    {
        $category = $this->mainCategoryService->show($id);
        return view('category::main_category.modal', $category);
    }

    public function edit($id)
    {
        return view('category::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
