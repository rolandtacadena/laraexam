@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="small-12 medium-3 columns">
            <img class="thumbnail" src="http://placehold.it/650x350">
            <h5>{{ $user->name }}</h5>
            <hr/>
            <div class="user-details">
                <p class="">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
        <div class="small-12 medium-9 columns">
            <div class="user-exam-history">
                <h4>Your Exam History</h4>
                <hr/>
                <div class="row">
                    @foreach($user->exams->chunk(3) as $set)
                        <div>
                            @foreach($set as $userExam)
                                <div class="medium-3 large-3 columns">
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

@endsection