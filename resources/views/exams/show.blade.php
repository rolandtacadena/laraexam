@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="medium-7 columns">
            <!-- temporary exam image -->
            <img class="thumbnail" src="http://placehold.it/650x350">
        </div>
        <div class="medium-5 large-5 columns">
            <h3><b>{{ $exam->name }}</b></h3>
            <p>{{ $exam->description }}</p>
            <hr/>
            <h4>Subject: <b>{{ $exam->subject->name }}</b></h4>
            <a href="{{ route('subject-exams', $exam->subject->id) }}">View other exams for this subject</a>
            <hr/>
            <p>Date Created: <b>{{ $exam->created_at }}</b></p>
            <p>Date Created: <b>{{ $exam->updated_at }}</b></p>
            <hr/>
            <div class="row">
                <div class="medium-6 columns">
                    <a href="{{ route('exam-start', $exam->id) }}" class="exam-btn button medium expanded">Start exam now</a>
                </div>
                <div class="medium-6 columns">
                    <a href="{{ route('subject-exams', $exam->subject->id) }}" class="exam-btn button medium secondary expanded">Cancel</a>
                </div>
            </div>
        </div>
    </div>

@endsection