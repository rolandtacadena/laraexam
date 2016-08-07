<div class="small reveal" id="NewStudentModal" data-reveal>
    <form method="POST" action="{{ route('teacher-add-student') }}">

        {{ csrf_field() }}

        <div class="row">
            <div class="medium-12 columns">
                <h4><b>Add a new Student</b></h4>
            </div>
            <div class="small-12 columns">
                <label>Student Name
                    <input name="name" type="text" placeholder="Enter Student name">
                </label>
            </div>
            <div class="small-12 columns">
                <label>Student Email
                    <input name="email" type="text" placeholder="Enter Student email">
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