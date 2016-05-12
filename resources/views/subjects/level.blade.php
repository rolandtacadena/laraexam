@extends('layouts.app')

@section('content')
    <div class="subj-levels">
        <div class="row">
            <h2>
                Choose level for {{ $subject->name }} subject.
            </h2>
        </div>
        <div class="level-choices row small-up-1 medium-up-2 large-up-3">
            <div class="choice column">
                <a href="">
                    <div class="callout">
                        <p class="lead">Beginner</p>
                        <p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
                        <a class="button small" href="">Continue Exam</a>
                        <a href="">View Exam details</a>
                    </div>
                </a>
            </div>
            <div class="choice column">
                <a href="">
                    <div class="callout">
                        <p class="lead">Intermediate</p>
                        <p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
                        <a class="button small" href="">Continue Exam</a>
                        <a href="">View Exam details</a>
                    </div>
                </a>
            </div>
            <div class="choice column">
                <a href="">
                    <div class="callout">
                        <p class="lead">Advance</p>
                        <p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
                        <a class="button small" href="">Continue Exam</a>
                        <a href="">View Exam details</a>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection