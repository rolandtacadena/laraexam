@extends('layouts.app')

@section('content')

    <div class="row column">
        <header class="home-hero">
            <div class="row homepage">
                <div class="small-8 medium-5 medium-offset-1 large-offset-2 end columns">
                    <h1 class="hero-main-header">LaravelExam</h1>
                    <h2 class="hero-subheader">Test your knowledge on different aspects of Web Development</h2>

                    <br>

                    @if($studentSignedIn)

                        <a href="{{ route('subjects-all') }}" class="large button exam-btn">Start Exam Now</a>

                    @elseif($teacherSignedIn)

                        <a href="{{ route('teacher-subjects') }}" class="large button exam-btn">Go To Teacher's Dashboard</a>

                    @else

                        <a href="login" class="large button exam-btn">Student Sign In</a>
                        <a href="teacher/login" class="large button exam-btn">Teacher Sign In</a>

                    @endif

                </div>
            </div>
        </header>

        <h3 class="title-block"><i class="step fi-list-thumbnails"></i>List of Subjects</h3>

        <div class="box">
            <div class="row vertical-feature-block">

                <div class="medium-3 large-3 columns text-center">
                    <img src="{{ URL::asset('img/exam2.svg') }}">
                    <h3 class="feature-block-header">Semantic</h3>
                    <p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
                </div>

                <div class="medium-3 large-3 columns text-center">
                    <a href="mobility.html">
                        <img src="{{ URL::asset('img/exam2.svg') }}">
                        <h3 class="feature-block-header">Mobile First</h3>
                    </a>
                    <p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>
                </div>

                <div class="medium-3 large-3 columns text-center">
                    <img src="{{ URL::asset('img/exam2.svg') }}">
                    <h3 class="feature-block-header">Customizable</h3>
                    <p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>
                </div>

                <div class="medium-3 large-3 columns text-center">
                    <img src="{{ URL::asset('img/exam2.svg') }}">
                    <h3 class="feature-block-header">Professional</h3>
                    <p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
                </div>

                <div class="medium-3 large-3 columns text-center">
                    <img src="{{ URL::asset('img/exam2.svg') }}">
                    <h3 class="feature-block-header">Professional</h3>
                    <p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
                </div>

                <div class="medium-3 large-3 columns text-center">
                    <img src="{{ URL::asset('img/exam2.svg') }}">
                    <h3 class="feature-block-header">Professional</h3>
                    <p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
                </div>

                <div class="medium-3 large-3 columns text-center">
                    <img src="{{ URL::asset('img/exam2.svg') }}">
                    <h3 class="feature-block-header">Professional</h3>
                    <p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
                </div>

                <div class="medium-3 large-3 columns text-center">
                    <img src="{{ URL::asset('img/exam2.svg') }}">
                    <h3 class="feature-block-header">Professional</h3>
                    <p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
                </div>

            </div>
        </div>
    </div>

@endsection