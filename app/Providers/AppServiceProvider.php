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
            'App\Repositories\Contracts\HomeRepositoryInterface',
            'App\Repositories\Eloquents\HomeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\JobListRepositoryInterface',
            'App\Repositories\Eloquents\JobListRepository'
        );
    }
}
