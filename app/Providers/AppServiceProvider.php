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

        // boolean var checks if user is logged in
        view()->share('signedIn', Auth::check());

        // variable that holds logged in user
        view()->share('user', Auth::user());

        // composer index page with all subjects
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
