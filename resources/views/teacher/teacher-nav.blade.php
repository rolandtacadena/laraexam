<div class="small-12 medium-2 large-2 columns">
    <div class="box">
        <ul id="teacher-navs">

            <li class="{{ $currentPath == 'teacher/dashboard/subjects' ? 'active' : ''}}">
                <a href="{{ route('teacher-subjects') }}">Subjects</a>
            </li>

            <li class="{{ $currentPath == 'teacher/dashboard/exams' ? 'active' : ''}}">
                <a href="{{ route('teacher-exams') }}">Exams</a>
            </li>

            <li class="{{ $currentPath == 'teacher/dashboard/questions' ? 'active' : ''}}">
                <a href="{{ route('teacher-questions') }}">Questions</a>
            </li>

            <li class="{{ $currentPath == 'teacher/dashboard/students' ? 'active' : ''}}">
                <a href="{{ route('teacher-students') }}">Students</a>
            </li>

        </ul>
    </div>
</div>