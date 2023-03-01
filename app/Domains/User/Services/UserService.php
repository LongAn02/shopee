<?php

namespace App\Domains\User\Services;

use App\Services\BaseService;

class UserService extends BaseService
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
