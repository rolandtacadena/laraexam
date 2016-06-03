<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function profile(User $user)
    {
        return $user->id;
//        return view('users.profile');

    }

    public function exam_history()
    {

    }
}
