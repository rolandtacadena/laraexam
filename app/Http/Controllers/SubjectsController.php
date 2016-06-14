<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubjectsController extends Controller
{

    /**
     * Get all the exams for the given subject.
     *
     * @param Subject $subject
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function exams(Subject $subject)
    {
        $subjectExams = $subject->exams()->has('questions')->paginate(8);
        return view('subjects.subject-exams', compact('subject', 'subjectExams'));
    }
}
