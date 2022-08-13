<?php

namespace App\Providers;

use App\Modules\Backend\Applicant\ApplicantRepository;
use EloquentApplicantRepository;
use Illuminate\Support\ServiceProvider;

class DependencyInjectionServiceProvider extends ServiceProvider{
    public function boot(){

    }

    public function register()
    {
        $this->app->bind(
            ApplicantRepository::class,
            EloquentApplicantRepository::class
        );
    }
}