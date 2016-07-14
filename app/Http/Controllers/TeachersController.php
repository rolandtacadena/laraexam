<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;

class TeachersController extends Controller
{
    /**
     * Get parent's construct and set middleware.
     */
    public function __construct(){

        parent::__construct();

        $this->middleware('teacher');
    }

    /**
     * Admin dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('teacher.dashboard');
    }

    /**
     * Show teacher subjects.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subjects()
    {
        return view('teacher.subjects');
    }

    public function view_subject(Subject $subject)
    {
        return view('teacher.view-subject', compact('subject'));
    }

    /**
     * Store subjects.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create_subject(Request $request)
    {
        $this->teacher->createSubject($request->all());
        flash()->success('Subject Added', 'You have successfully added a subject!');
        return redirect()->route('teacher-subjects');
    }

    /**
     * Show teacher exams.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function exams()
    {
        $subjectNameIdArray = $this->teacher->subjects()->pluck('name', 'id');
        return view('teacher.exams', compact('subjectNameIdArray'));
    }

    public function create_exam(Request $request)
    {
        $subject = Subject::findOrFail($request->input('subject_id'));
        $subject->createExam($request->all());
        flash()->success('Exam Added', 'You have successfully added a exam!');
        return redirect()->route('teacher-exams');
    }

    /**
     * Show teacher questions.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function questions()
    {
        return view('teacher.questions');
    }

    /**
     * Show teacher students.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function students()
    {
        return view('teacher.students');
    }

}
