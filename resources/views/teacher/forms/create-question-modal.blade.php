<div class="small reveal" id="NewQuestionModal" data-reveal>
    <form method="POST" action="{{ route('teacher-create-question') }}">
        {{ csrf_field() }}
        <h4>Create a new Question</h4>
        <div class="row">
            <input type="hidden" name="exam_id" value="{{ $exam->id }}"/>
            <div class="small-12 columns">
                <label>Question
                    <input name="question" type="text" placeholder="question">
                </label>
            </div>
            <div class="small-12 columns">
                <label>Choice 1
                    <input name="choice1" type="text" placeholder="choice1">
                </label>
            </div>
            <div class="small-12 columns">
                <label>Choice 2
                    <input name="choice2" type="text" placeholder="choice2">
                </label>
            </div>
            <div class="small-12 columns">
                <label>Choice 3
                    <input name="choice3" type="text" placeholder="choice3">
                </label>
            </div>
            <div class="small-12 columns">
                <label>Choice 4
                    <input name="choice4" type="text" placeholder="choice4">
                </label>
            </div>
            <div class="small-12 columns">
                <label>Answer
                    <input name="answer" type="text" placeholder="choice4">
                </label>
            </div>
            <div class="small-12 columns">
                <p>This will be assigned to exam : <b>{{ $exam->name }}</b></p>
            </div>
            <div class="small-12 columns">
                <button class="exam-btn button" type="submit">Submit</button>
            </div>
        </div>
    </form>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>