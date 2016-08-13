<div class="small reveal" id="updateStudentModal" data-reveal>
    <form action="{{ route('teacher-update-student-status') }}" method="POST">

        {!! method_field('patch') !!}

        {{ csrf_field() }}

        <input type="hidden" name="student_id" value="@{{ student.id }}">

        <div class="row">
            <div class="medium-12 columns">
                <h4><b>Update Student</b></h4>
            </div>
            <div class="medium-12 columns">
                <label>Student Name
                    <input type="text" name="name" value="@{{ student.name }}" placeholder="Student name">
                </label>
            </div>
            <div class="medium-12 columns">
                <label>Student Email
                    <input type="text" name="email" value="@{{ student.email }}" placeholder="Student email">
                </label>
            </div>
            <div class="medium-12 columns">
                <fieldset class="large-6 columns">
                    <legend>Student Activation</legend>
                    <input type="radio" name="status" value="true" id="activate" :checked="student.status == 1"><label for="activate">Activate</label>
                    <input type="radio" name="status" value="false" id="deactivate" :checked="student.status == 0"><label for="deactivate">Deactivate</label>
                </fieldset>
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