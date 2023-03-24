<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Category\Interfaces\MainCategoryServiceInterface;
use Modules\Category\Services\MainCategoryService;

class ContainerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MainCategoryServiceInterface::class, MainCategoryService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
