<div class="small reveal" id="NewExamModal" data-reveal>
    <form method="POST" action="{{ route('teacher-create-exam') }}">
        {{ csrf_field() }}
        <h4>Create a new Exam</h4>
        <div class="row">
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
                <label>Select Subject exam belongs to
                    <select name="subject_id">
                        @foreach($subjectNameIdArray as $examId => $examName)
                            <option value="{{ $examId }}">{{ $examName }}</option>
                        @endforeach
                    </select>
                </label>
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