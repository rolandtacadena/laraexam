<div class="small reveal" id="NewSubjectModal" data-reveal>
    <form method="POST" action="{{ route('teacher-create-subject') }}">

        {{ csrf_field() }}

        <h4>Create a new Subject</h4>
        <div class="row">
            <div class="small-12 columns">
                <label>Subject Name
                    <input name="name" type="text" placeholder="Enter Subject name">
                </label>
            </div>
            <div class="small-12 columns">
                <label>
                    Subject Description
                    <textarea name="description" placeholder=""></textarea>
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