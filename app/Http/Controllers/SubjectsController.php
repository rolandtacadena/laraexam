<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubjectsController extends Controller
{
    public function level(Subject $subject)
    {
        return view('subjects.level', compact('subject'));
    }
}
