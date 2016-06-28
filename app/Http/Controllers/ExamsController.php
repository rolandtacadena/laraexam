<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Question;
use App\Result;
use App\Subject;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ExamsController extends Controller
{

    /**
     * Get the parent variables from parent class.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show exam details.
     *
     * @param Subject $subject
     * @param Exam $exam
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show(Subject $subject, Exam $exam)
    {
        $examTakenCount = \DB::table('exam_user')
            ->whereUserId($this->user->id)
            ->whereExamId($exam->id)
            ->count();

        if(!$exam->questionCount() > 0) {
            flash()->error('Sorry', $exam->name . ' exam has no questions yet. Plese select another.');
            return redirect()->route('subject-exams', $subject->id);
        }

        if($examTakenCount > 0) {
            flash()->error('Sorry', 'You already taken exam ' . $exam->name . '.');
            return redirect()->route('subject-exams', $subject->id);
        }

        return view('exams.show', compact('exam'));

    }

    /**
     * Load exam questions with the given exam id.
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
     * Process the question submitted by the examinee.
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

        flash()->overlay('Congrats!', 'You made it to exam. Please check summary of your answers.');

        return redirect()->action('ExamsController@result', [
            'exam' => $exam,
            'user' => $this->user
        ]);

    }

    /**
     * List all exam history results.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function all_results()
    {
        return view('exams.all-results');
    }

    /**
     * Return exam results from givem exam id and user id.
     *
     * @param $exam
     * @param $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function result(Exam $exam, User $user)
    {

        $examSummary = Result::whereUserId($user->id)
            ->whereExamId($exam->id)->get();

        return view('exams.result', compact('examSummary', 'exam', 'examResult'));

    }
}
