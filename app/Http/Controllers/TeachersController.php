<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Question;
use App\Subject;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class TeachersController extends Controller
{

    /**
     * Get parent's construct and set middleware.
     */
    public function __construct()
    {

        parent::__construct();

        $this->middleware('teacher');
    }

    /**
     * Admin dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
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

    /**
     * Load subject details in view.
     *
     * @param Subject $subject
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view_subject(Subject $subject)
    {
        return view('teacher.view-subject', compact('subject'));
    }

    /**
     * Used for ajax request in teacher/subjects.blade.php
     *
     * @param Subject $subject
     * @return Subject
     */
    public function return_subject_by_id(Subject $subject)
    {
        return $subject;
    }

    /**
     * Used for ajax request in teacher/exams.blade.php
     *
     * @param Subject $subject
     * @return mixed
     */
    public function return_exams_by_subject(Subject $subject)
    {
        return $subject->exams()->get();
    }

    /**
     * Used for ajax request in teacher/view-exam.blade.php
     *
     * @param Question $question
     * @return Question
     */
    public function return_question_by_id(Question $question)
    {
        $data = ['exam' => $question->exam, 'question' => $question];
        return $data;
    }

    /**
     * Used for ajax request in teacher/questions.blade.php
     * Return all questions for the given exam.
     *
     * @param Exam $exam
     * @return mixedquestionList
     */
    public function return_questions_by_exam(Exam $exam)
    {
        return $exam->questions()->get();
    }

    public function return_student_by_id(User $student)
    {
        return $student;
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
     * Updating subject.
     *
     * @param Request $request
     * @return array
     */
    public function update_subject(Request $request)
    {
        $subject = Subject::findOrFail($request->input('subject_id'));

        $subject->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        flash()->overlay('Subject Update', 'You have successfully updated ' . $subject->name . ' subject.');
        return redirect()->route('teacher-view-subject', $subject);
    }

    /**
     * Show teacher exams.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function exams()
    {
        $subjects = $this->teacher->subjects()->lists('id', 'name');
        return view('teacher.exams', compact('subjects'));
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
    public function update_exam(Request $request)
    {
        $exam = Exam::findOrFail($request->input('exam_id'));
        $exam->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        flash()->overlay('Exam Update', 'You have successfully updated ' . $exam->name . ' exam.');
        return redirect()->route('teacher-view-exam', $exam);
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
        $subjects = $this->teacher->subjects()->lists('id', 'name');
        return view('teacher.questions', compact('subjects'));
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
     * Update question.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update_question(Request $request)
    {
        $exam = Exam::findOrFail($request->input('exam_id'));
        $question = Question::findOrFail($request->input('question_id'));
        $question->update([
            'question' => $request->input('question'),
            'choice1' => $request->input('choice1'),
            'choice2' => $request->input('choice2'),
            'choice3' => $request->input('choice3'),
            'choice4' => $request->input('choice4'),
            'answer' => $request->input('answer')
        ]);
        flash()->overlay('Question Update', 'You have successfully updated ' . $question->question . '.');
        return redirect()->route('teacher-view-exam', $exam);
    }

    /**
     * Add new student.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add_student(Request $request)
    {
        $this->teacher->addStudent($request->all());
        return redirect()->route('teacher-students');
    }
    
    /**
     * Update student status.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update_student_status(Request $request)
    {
        $user = User::findOrFail($request->input('student_id'));
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);
        flash()->success('dwd', 'dwdwd');
        return redirect()->route('teacher-students');
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
