<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

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

    public function dashboard()
    {
        return view('users.dashboard');
    }

    public function settings()
    {
        return view('users.settings');
    }
}
