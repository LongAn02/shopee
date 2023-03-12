<?php

namespace App\Providers;

use App\Domains\Category\Interface\CategoryServiceInterface;
use App\Domains\Category\Interface\SubCategoryServiceInterface;
use App\Domains\Category\Services\CategoryService;
use App\Domains\Category\Services\SubCategoryService;
use Illuminate\Support\ServiceProvider;

class ContainerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
        $this->app->bind(SubCategoryServiceInterface::class, SubCategoryService::class);
    }
}
