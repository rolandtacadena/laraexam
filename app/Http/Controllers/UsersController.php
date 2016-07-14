<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;

use App\Http\Requests;

class UsersController extends Controller
{
    /**
     * Show user profile.
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile(User $user)
    {
        return view('users.profile');
    }

    /**
     * Show dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        return view('users.dashboard');
    }

    /**
     * Show user settings.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function settings()
    {
        return view('users.settings');
    }
}
