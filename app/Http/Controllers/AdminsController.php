<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminsController extends Controller
{
    /**
     * Get parent's construct and set middleware.
     */
    public function __construct(){

        parent::__construct();

        $this->middleware('admin');
    }

    /**
     * Admin dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('admin.dashboard');
    }

}
