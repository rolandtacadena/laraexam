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
        view()->share('signedIn', Auth::check());
        view()->share('user', Auth::user());
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
