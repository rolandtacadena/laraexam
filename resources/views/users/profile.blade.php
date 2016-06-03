@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="small-12 medium-3 columns">
            <img class="thumbnail" src="http://placehold.it/650x350">
            <h5>{{ $user->name }}</h5>
            <hr/>

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
                                    <h3 class="feature-block-header">Semantic</h3>
                                    <p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection