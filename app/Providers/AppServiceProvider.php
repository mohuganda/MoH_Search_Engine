<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SearchRepository;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        

       $this->app->singleton(SearchRepository::class, function($app)
        {
            return new SearchRepository();
        });

       $this->app->singleton(ItemsRepository::class, function($app)
        {
            return new ItemsRepository();
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
   

        Schema::defaultStringLength(191);

    }
}
