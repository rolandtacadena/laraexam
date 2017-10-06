@extends('layouts.app')

@section('page.title')
    Let me test your skills
@endsection

@section('content')

    <div class="general-container">
        <div class="row column homepage">
            <header class="home-hero">
                <div class="row">
                    <div class="small-8 medium-5 medium-offset-1 large-offset-2 end columns">
                        <h1 class="hero-main-header">LaravelExam</h1>
                        <h2 class="hero-subheader">Test your knowledge on different aspects of Web Development</
                        <br>

                        @if($studentSignedIn)

                            <a href="{{ route('subjects-all') }}" class="large button exam-btn">Start Exam Now</a>

                        @elseif($teacherSignedIn)

                            <a href="{{ route('teacher-subjects') }}" class="large button exam-btn">Go To Teacher's Dashboard</a>

                        @else

                            <div class="row">
                                <a href="login" class="large button exam-btn">Student Sign In</a>
                                <a href="teacher/login" class="large button exam-btn">Teacher Sign In</a>
                            </div>

                        @endif

                    </div>
                </div>
            </header>
            <article class="page-content">
                <div class="row">
                    <div class="medium-9 medium-centered columns">
                        <h2 class="text-center">Welcome to Laraexam!</h2>
                        <h5 class="page-intro">
                            Its a online examination app built for students and teachers. It enable teachers to
                            give instant exams to their students online. Teacher has the ability to create, update and
                            manage subjects, exams and question. Students can take exams that they are assigned to.
                            Click <a href="{{ route('how-it-works') }}">here</a> for more information.
                        </h5>
                    </div>
                </div>
            </article>
        </div>
    </div>

@endsection