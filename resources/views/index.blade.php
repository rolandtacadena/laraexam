@extends('layouts.app')

@section('content')

    <div class="row column">
        <header class="home-hero">
            <div class="row homepage">
                <div class="small-8 medium-5 medium-offset-1 large-offset-2 end columns">
                    <h1 class="hero-main-header">LaravelExam</h1>
                    <h2 class="hero-subheader">Test your knowledge on different aspects of Web Development</h2>
                </div>
            </div>
        </header>
        <h3>List of Subjects</h3>
        <hr style="margin-bottom: 0;"/>

        @if(count($subjects) > 0)

            <div class="row features">

                @foreach($subjects->chunk(4) as $set)

                    <div class="subject-chunk-divider clearfix">

                        @foreach($set as $subject)

                            <div class="subject-block medium-3 large-3 columns text-center">
                                <!-- this subject photo is temporary -->
                                <img src="img/code.svg">
                                <h3 class="feature-block-header">{{ $subject->name }}</h3>
                                <p>{{ $subject->description }}</p>
                                <a class="button large exam-btn"
                                   href="{{ route('subject-exams', $subject->id) }}">View subject
                                    <i class="step fi-arrow-right size-20"></i>
                                </a>
                            </div>

                        @endforeach

                    </div>

                @endforeach

            </div>

        @else

            <p>No Subjects available yet.</p>

        @endif
        
    </div>

@endsection
