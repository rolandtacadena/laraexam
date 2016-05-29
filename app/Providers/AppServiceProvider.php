<?php

namespace App\Providers;

use App\Subject;
use Illuminate\Support\Facades\Auth;
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
        $this->composeSubjectsInIndex();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function composeSubjectsInIndex()
    {
        view()->composer(['index'], function ($view) {
            $view->with('subjects', Subject::all());
        });
    }
}
