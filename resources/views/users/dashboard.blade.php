@extends('layouts.app')

@section('content')

    <div class="row column expanded user-dashboard">

        @include('layouts.partials.user-navs.user-navs')
        
        <div class="small-12 medium-10 large-10 columns">
            <div class="tabs-content vertical user-exam-history" data-tabs-content="example-vert-tabs">
                <div class="tabs-panel is-active" id="panel1v">
                    <h4>Your Exam History</h4>

                    <div class="row">
                        @foreach($user->exams->chunk(3) as $set)
                            <div>
                                @foreach($set as $userExam)
                                    <div class="small-12 medium-6 large-3 columns text-center">
                                        <img src="{{ URL::asset('img/exam2.svg') }}">
                                        <h5 class="feature-block-header">{{ $userExam->name }}</h5>
                                        <p>Subject: <b><a href="{{ route('subject-exams', $userExam->subject->id) }}">{{ $userExam->subject->name }}</a></b></p>
                                        <p>{{ $userExam->created_at->diffForHumans()}}</p>
                                        <a href="{{ route('exam-result', [$userExam->id, $user->id]) }}" class="button exam-btn">View Result</a>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection