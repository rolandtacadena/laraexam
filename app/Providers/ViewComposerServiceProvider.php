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
     * Make 'signedIn', 'user' and 'adminSignedIn' globally accessible.
     */
    public function composeUserOnEveryView()
    {
        view()->composer(['*'], function($view) {
            $view->with('studentSignedIn', Auth::guard('user')->check());
            $view->with('adminSignedIn', Auth::guard('admin')->check());
            $view->with('user', Auth::guard('user')->user());
            $view->with('admin', Auth::guard('admin')->user());
        });
    }
}
