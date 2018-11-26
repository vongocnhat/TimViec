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
        $this->app->bind(
            'App\Repositories\Contracts\Home\CertificateHomeRepositoryInterface',
            'App\Repositories\Eloquents\Home\CertificateHomeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Home\ExperienceOfProfileHomeRepositoryInterface',
            'App\Repositories\Eloquents\Home\ExperienceOfProfileHomeRepository'
        );

        //admin

        $this->app->bind(
            'App\Repositories\Contracts\EmployerRepositoryInterface',
            'App\Repositories\Eloquents\EmployerRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\DegreeRepositoryInterface',
            'App\Repositories\Eloquents\DegreeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\LanguageRepositoryInterface',
            'App\Repositories\Eloquents\LanguageRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\GraduateRepositoryInterface',
            'App\Repositories\Eloquents\GraduateRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ProfileRepositoryInterface',
            'App\Repositories\Eloquents\ProfileRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\JobRepositoryInterface',
            'App\Repositories\Eloquents\JobRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CertificateRepositoryInterface',
            'App\Repositories\Eloquents\CertificateRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ExperienceRepositoryInterface',
            'App\Repositories\Eloquents\ExperienceRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\SalaryRepositoryInterface',
            'App\Repositories\Eloquents\SalaryRepository'
        );
         $this->app->bind(
            'App\Repositories\Contracts\OfficeRepositoryInterface',
            'App\Repositories\Eloquents\OfficeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\EmployeeRepositoryInterface',
            'App\Repositories\Eloquents\EmployeeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CareerRepositoryInterface',
            'App\Repositories\Eloquents\CareerRepository'
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
            'App\Repositories\Contracts\TypeofworkRepositoryInterface',
            'App\Repositories\Eloquents\TypeofworkRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\Home\ProfileSubmittedHomeRepositoryInterface',
            'App\Repositories\Eloquents\Home\ProfileSubmittedHomeRepository'
        );
    }
}
