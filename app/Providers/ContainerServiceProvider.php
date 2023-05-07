<?php

namespace App\Providers;

use App\Services\Media\Interfaces\MediaInterface;
use App\Services\Media\Services\MediaService;
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
        $this->app->singleton(MainCategoryServiceInterface::class, MainCategoryService::class);
        $this->app->singleton(MediaInterface::class, MediaService::class);
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
