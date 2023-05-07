<?php

namespace App\Traits;

trait Common
{
    public function getModelRelationship($relationship)
    {
        return $this->with($relationship)->all();
    }
}
