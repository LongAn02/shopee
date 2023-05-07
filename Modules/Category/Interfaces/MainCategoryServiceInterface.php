<?php

namespace Modules\Category\Interfaces;

interface MainCategoryServiceInterface
{
    public function getAllMainCategory();

    public function store($request);

    public function show($id);

    public function handleMainCategory($request, $id);
}
