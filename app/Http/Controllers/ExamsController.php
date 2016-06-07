<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Question;
use App\Result;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ExamsController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show exam
     *
     * @param Exam $exam
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Exam $exam)
    {

        flash()->overlay(
            'Please be informed',
            'By clicking START you will be assgined to the exam and you are forced to finish it, unless you did not finish, it will be marked as incomplete.');

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
        $this->user->exams()->save($exam);

        return view('exams.start', compact('exam'));

    }

    /**
     * Process the question submitted by the examinee
     *
     * @param Request $request
     * @return mixed
     */
    public function process(Request $request)
    {
        $userAnswers = $request->input('questions');
        $exam = Exam::findOrFail($request->input('exam'));

        $correct = 0;
        $wrong = 0;

        foreach($userAnswers as $userAnsweredQuestion => $whatUserAnswered)
        {
            $question = Question::findOrFail($userAnsweredQuestion);

            if($whatUserAnswered == $question->answer) {
                $remarks = 1;
                $correct++;
            } else {
                $remarks = 0;
                $wrong++;
            }

            Result::create([
                'user_id' => $this->user->id,
                'exam_id' => $exam->id,
                'question_id' => $question->id,
                'question' => $question->question,
                'user_answer' => $whatUserAnswered,
                'correct_answer' => $question->answer,
                'remarks' => $remarks
            ]);
        }

        $this->user->exams()->updateExistingPivot($exam->id, [
            'completed' => true,
            'num_correct' => $correct,
            'num_wrong' => $wrong
        ]);

        return redirect()->action('ExamsController@result', [
            'exam' => $exam,
            'user' => $this->user
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

        $examSummary = Result::whereUserId($user->id)
            ->whereExamId($exam->id)->get();

        /*flash()->overlay(
            "Congrats! You have finished the exam " . $exam->name,
            "Please view the detailed report of your answers."
        );*/

        return view('exams.result', compact('examSummary', 'exam', 'examResult'));

    }
}
