@extends('layouts.app')

@section('content')
    <div class="row column">
        <h3 class="title-block"><i class="step fi-list-thumbnails"></i>List of Subjects</h3>
        <hr style="margin-bottom: 0;"/>

        @if(count($subjects) > 0)

            <div class="row features">

                @foreach($subjects->chunk(4) as $set)

                    <div class="subject-chunk-divider clearfix">

                        @foreach($set as $subject)

                            <div class="subject-block medium-6 large-3 columns text-center">

                                <!-- this subject photo is temporary -->
                                <img src="img/code.svg">

                                <h3 class="feature-block-header">{{ $subject->name }}</h3>

                                <p>{{ $subject->description }}</p>

                                <a class="button medium exam-btn"
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