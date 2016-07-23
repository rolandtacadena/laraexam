<div class="small reveal" id="NewExamModal" data-reveal>
    <form method="POST" action="{{ route('teacher-create-exam') }}">

        {{ csrf_field() }}

        <div class="row">
            <div class="medium-12 columns">
                <h4><b>Create a new Exam</b></h4>
            </div>
            <input type="hidden" name="subject_id" value="{{ $subject->id }}"/>
            <div class="small-12 columns">
                <label>Exam Name
                    <input name="name" type="text" placeholder="Enter Exam name">
                </label>
            </div>
            <div class="small-12 columns">
                <label>
                    Subject Description
                    <textarea name="description"></textarea>
                </label>
            </div>
            <div class="small-12 columns">
                <p>This will be assigned to: <b>{{ $subject->name }}</b></p>
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