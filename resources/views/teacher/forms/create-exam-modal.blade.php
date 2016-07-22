<div class="small reveal" id="NewExamModal" data-reveal>
    <form method="POST" action="{{ route('teacher-create-exam') }}">

        {{ csrf_field() }}

        <h4>Create a new Exam</h4>
        <div class="row">
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