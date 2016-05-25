<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Question;
use App\Result;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ExamsController extends Controller
{

    public function show(Exam $exam)
    {
        return view('exams.show', compact('exam'));
    }

    /**
     * Load exam questions with the given exam id
     *
     * @param Exam $exam
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function start(Exam $exam)
    {
        Auth::user()->exams()->save($exam);

        $questions = $exam->questions;

        return view('exams.start', compact('exam', 'questions'));
    }

    /**
     * Process the question submitted by the examinee
     *
     * @param Request $request
     * @return mixed
     */
    public function process(Request $request)
    {
        $answers = $request->input('question');

        $exam = Exam::findOrFail($request->input('exam'));

        foreach($answers as $question_id => $user_answer)
        {
            $question = Question::findOrFail($question_id);

            $remarks = $user_answer == $question->answer ? 1 : 0;

            Result::create([
                'user_id' => Auth::user()->id,
                'exam_id' => $exam->id,
                'question_id' => $question->id,
                'question' => $question->question,
                'user_answer' => $user_answer,
                'correct_answer' => $question->answer,
                'remarks' => $remarks
            ]);
        }

        return redirect()->action('ExamsController@result', [
            'exam' => $exam,
            'user' => Auth::user()
        ]);

    }

    /**
     * List all exam history resultss
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function all_results()
    {
        return view('exams.all-results');
    }

    /**
     * Return exam results from givem exam id and user id
     *
     * @param $exam
     * @param $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function result(Exam $exam, User $user)
    {

        $results = Result::where('user_id', $user->id)
            ->where('exam_id', $exam->id)->get();

        return view('exams.result', compact('results', 'exam'));

    }
}
