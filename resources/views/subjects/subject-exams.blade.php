@extends('layouts.app')

@section('content')

    @if(count($exams) > 0)

        <div class="general-header row column">
            <h4>Select exams available for <b>{{ $subject->name }}.</b></h4>
        </div>
        <hr style="margin-bottom: 0;" />
        <div class="row exam-list" data-equalizer data-equalize-on="small" id="test-eq">

            @foreach($exams->chunk(4) as $set)

                <div class="exam-chunk-divider clearfix">

                    @foreach($set as $exam)

                        <div class="exam-block medium-6 large-3 columns text-center" data-equalizer-watch>
                            {{--<span class="label exam-counter">{{ $exam->id }}</span>--}}
                            <img src="{{ URL::asset('img/exam2.svg') }}">
                            <h3 class="exam-name">{{ $exam->name }}</h3>
                            <p class="exam-desc">{{ $exam->description }}</p>
                            <a class="button exam-btn"
                               href="{{ route('exam-details', $exam->id) }}">View this exam
                                <i class="step fi-arrow-right size-20"></i>
                            </a>
                        </div>

                    @endforeach

                </div>

            @endforeach

        </div>
    @else

    <div class="row column no-exam-available">
        <h4>Sorry no exam available for <b>{{ $subject->name }}.</b></h4>
    </div>

    @endif

@endsection