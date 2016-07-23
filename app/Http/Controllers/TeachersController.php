<?php

namespace App\Http\Controllers;

use App\Exam;
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

        $this->middleware( 'teacher' );
    }

    /**
     * Admin dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view( 'teacher.dashboard' );
    }

    /**
     * Show teacher subjects.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subjects()
    {
        return view( 'teacher.subjects' );
    }

    /**
     * Load subject details in view.
     *
     * @param Subject $subject
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view_subject( Subject $subject )
    {
        return view( 'teacher.view-subject', compact( 'subject' ) );
    }

    /**
     * Used for ajax request in teacher/subjects.blade.php
     *
     * @param Subject $subject
     * @return Subject
     */
    public function return_subject_by_id( Subject $subject ) {
        return $subject;
    }

    /**
     * Store subjects.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create_subject( Request $request )
    {
        $this->teacher->createSubject( $request->all() );
        flash()->success('Subject Added', 'You have successfully added a subject!');
        return redirect()->route('teacher-subjects');
    }

    /**
     * Updating subject.
     *
     * @param Request $request
     * @return array
     */
    public function update_subject( Request $request ) {
        $subject = Subject::findOrFail( $request->input( 'subject_id' ) );

        $subject->update([
            'name' => $request->input( 'name' ),
            'description' => $request->input( 'description' )
        ]);
        flash()->overlay( 'Subject Update', 'You have successfully updated ' . $subject->name . ' subject.' );
        return redirect()->route( 'teacher-view-subject', $subject );
    }

    /**
     * Show teacher exams.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function exams()
    {
        return view('teacher.exams', compact('subjectNameIdArray'));
    }

    /**
     * Storing exam.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create_exam(Request $request)
    {
        $subject = Subject::findOrFail($request->input('subject_id'));
        $subject->createExam($request->all());
        flash()->success('Exam Added', 'You have successfully added a exam!');
        return redirect()->route('teacher-view-subject', $subject);
    }

    /**
     * Update exam.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update_exam(Request $request) {
        $subject = Subject::findOrFail($request->input('subject_id'));
        $exam = Exam::findOrFail($request->input('exam_id'));
        $exam->update([
            'name' => $request->input( 'name' ),
            'description' => $request->input( 'description' )
        ]);
        flash()->overlay( 'Exam Update', 'You have successfully updated ' . $subject->name . ' exam.' );
        return redirect()->route( 'teacher-view-exam', $exam );
    }

    /**
     * Load exam view.
     *
     * @param Exam $exam
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view_exam(Exam $exam)
    {
        return view('teacher.view-exam', compact('exam'));
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
     * Storing questions.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create_question(Request $request)
    {
        $exam = Exam::findOrFail($request->input('exam_id'));
        $exam->createQuestion($request->all());
        flash()->success('Question Added', 'You have successfully added a question!');
        return redirect()->route('teacher-view-exam', $exam);
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
