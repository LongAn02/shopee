<?php

namespace App\Domains\Category\Interface;

interface CategoryServiceInterface
{
    public function store($dataRequest);

    public function getCategory();

    public function getCategoryAndRelationSubCategory();
}
