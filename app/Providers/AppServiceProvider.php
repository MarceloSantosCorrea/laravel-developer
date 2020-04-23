<?php

namespace App\Providers;

use App\Models\ProductCategory;
use App\Models\User;
use App\Observers\ProductCategoryObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \App::bind('helpers', function () {
            return new \App\Helpers\Helpers();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        ProductCategory::observe(ProductCategoryObserver::class);
    }
}
