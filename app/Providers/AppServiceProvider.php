<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        // khai báo interface và repository
        $this->app->bind(
            'App\Repositories\Contracts\EmployerRepositoryInterface',
            'App\Repositories\Eloquents\EmployerRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\EmployeeRepositoryInterface',
            'App\Repositories\Eloquents\EmployeeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Home\HomeRepositoryInterface',
            'App\Repositories\Eloquents\Home\HomeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Home\JobListRepositoryInterface',
            'App\Repositories\Eloquents\Home\JobListRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Home\JobDetailRepositoryInterface',
            'App\Repositories\Eloquents\Home\JobDetailRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Home\EmployeeHomeRepositoryInterface',
            'App\Repositories\Eloquents\Home\EmployeeHomeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Home\ProfileHomeRepositoryInterface',
            'App\Repositories\Eloquents\Home\ProfileHomeRepository'
        );
    }
}
