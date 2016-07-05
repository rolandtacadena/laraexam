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
     * Make 'signedIn', 'user' and 'teacherSignedIn' globally accessible.
     */
    public function composeUserOnEveryView()
    {
        view()->composer(['*'], function($view) {
            $view->with('studentSignedIn', Auth::guard('user')->check());
            $view->with('teacherSignedIn', Auth::guard('teacher')->check());
            $view->with('user', Auth::guard('user')->user());
            $view->with('teacher', Auth::guard('teacher')->user());
        });
    }
}
