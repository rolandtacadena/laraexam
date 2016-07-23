<div class="small reveal" id="updateExamModal" data-reveal>
    <form action="{{ route('teacher-update-exam') }}" method="POST">

        {!! method_field('patch') !!}

        {{ csrf_field() }}

        <input type="hidden" name="subject_id" value="{{ $exam->subject->id }}"/>
        <input type="hidden" name="exam_id" value="{{ $exam->id }}"/>

        <div class="row">
            <div class="medium-12 columns">
                <h4>Update exam <b>{{ $exam->name }}</b></h4>
            </div>
            <div class="medium-12 columns">
                <label>Input Label
                    <input type="text" name="name" value="{{ $exam->name }}" placeholder="subject name">
                </label>
            </div>
            <div class="medium-12 columns">
                <label>
                    What books did you read over summer break?
                    <textarea rows="10" name="description" placeholder="subject description">{{ $exam->name }}</textarea>
                </label>
            </div>
            <div class="medium-12 columns">
                <button class="button exam-btn" type="submit">Update</button>
            </div>
        </div>
    </form>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
