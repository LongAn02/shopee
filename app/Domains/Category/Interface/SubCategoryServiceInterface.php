<?php

namespace App\Domains\Category\Interface;

interface SubCategoryServiceInterface
{
    public function store($dataRequest);

    public function getSubCategoryAndRelationMainCategory();
}
