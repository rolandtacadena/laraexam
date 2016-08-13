@extends('layouts.app')

@section('page.title')
    Let me test your skills
@endsection

@section('content')

    <div class="general-container">
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
                {{--<div class="row column"><hr class="dotted"></div>--}}

                {{--<div class="row framework-callouts">--}}
                    {{--<div class="medium-4 columns container-hover framework-mascot">--}}
                        {{--<a href="sites.html">--}}
                            {{--<img src="{{ URL::asset('img/article1.svg') }}">--}}
                            {{--<h6>Foundation for</h6>--}}
                            {{--<h2>Sites</h2>--}}
                            {{--<p>Foundation for Sites is jam-packed with features to help people rapidly build content-focused websites. Foundation for Sites provides you with HTML, CSS, &amp; JavaScript to help you quickly prototype. It's easy to customize &amp; extend to get your project polished &amp; shipped.</p>--}}
                            {{--<p class="link">Learn more about Foundation for Sites</p>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="medium-4 columns container-hover framework-mascot">--}}
                        {{--<a href="emails.html">--}}
                            {{--<img src="{{ URL::asset('img/article2.svg') }}">--}}
                            {{--<h6>Foundation for</h6>--}}
                            {{--<h2>Emails</h2>--}}
                            {{--<p>Our email framework helps you craft responsive HTML emails that can be read anywhere on any device. Foundation for Emails helps navigate the how different email clients handle HTML and provide tested patterns that work with Outlook as well as all the other major email clients.</p>--}}
                            {{--<p class="link">Learn more about Foundation for Emails</p>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="medium-4 columns container-hover framework-mascot">--}}
                        {{--<a href="apps.html">--}}
                            {{--<img src="{{ URL::asset('img/article2.svg') }}">--}}
                            {{--<h6>Foundation for</h6>--}}
                            {{--<h2>Apps</h2>--}}
                            {{--<p>Build complex layouts, interactions, and animations easily with Foundation for Apps. The first reponsive front-end framework for building web apps uses the power of Angular and Flexbox to help you create software application that can be used on any device or browser.</p>--}}
                            {{--<p class="link">Learn more about Foundation for Apps</p>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="row column"><hr class="dotted"></div>--}}

                {{--<div class="row column text-center">--}}
                    {{--<h2>Build products, apps and services</h2>--}}
                    {{--<h4 class="subheader">Foundation is the professional choice for designers, developers and teams.</h4>--}}
                {{--</div>--}}
                {{--<div class="row vertical-feature-block text-center">--}}
                    {{--<div class="medium-3 large-3 columns">--}}
                        {{--<img src="{{ URL::asset('img/app1.svg') }}">--}}
                        {{--<h3 class="feature-block-header">Semantic</h3>--}}
                        {{--<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>--}}
                    {{--</div>--}}
                    {{--<div class="medium-3 large-3 columns">--}}
                        {{--<a href="mobility.html">--}}
                            {{--<img src="{{ URL::asset('img/app2.svg') }}">--}}
                            {{--<h3 class="feature-block-header">Mobile First</h3>--}}
                        {{--</a>--}}
                        {{--<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>--}}
                    {{--</div>--}}
                    {{--<div class="medium-3 large-3 columns">--}}
                        {{--<img src="{{ URL::asset('img/app3.svg') }}">--}}
                        {{--<h3 class="feature-block-header">Customizable</h3>--}}
                        {{--<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>--}}
                    {{--</div>--}}
                    {{--<div class="medium-3 large-3 columns">--}}
                        {{--<img src="{{ URL::asset('img/app4.svg') }}">--}}
                        {{--<h3 class="feature-block-header">Professional</h3>--}}
                        {{--<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row column text-center">--}}
                    {{--<a href="learn/why-foundation.html">Learn more about why Foundation fits in your company →</a>--}}
                {{--</div>--}}
                {{--<div class="row column"><hr class="dotted"></div>--}}
            </article>
        </div>
    </div>

@endsection