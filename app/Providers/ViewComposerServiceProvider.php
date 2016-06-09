<?php

namespace App\Providers;

use App\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeSubjectsInIndex();
        $this->composeUserOnEveryView();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Return all subjects in index view.
     */
    public function composeSubjectsInIndex()
    {
        view()->composer(['index'], function ($view) {
            $view->with('subjects', Subject::has('exams')->get());
        });
    }

    /**
     * make 'signedIn' and 'user' globally accessible in every views.
     */
    public function composeUserOnEveryView()
    {
        view()->composer(['*'], function($view) {
            $view->with('signedIn', Auth::check());
            $view->with('user', Auth::user());
        });
    }
}
