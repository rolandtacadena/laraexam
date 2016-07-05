<?php

namespace App\Http\Controllers;
use App\Http\Requests;

class PagesController extends Controller
{
    /**
     * Show main page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

    /*
     * Show guidelines about how the app works.
     */
    public function how_it_works()
    {
        return view('pages.how-it-works');
    }
}
