@extends('layouts.app')

@section('content')

    <div class="general-container">

        @if(count($subjectExams) > 0)

            <div class="general-header row column">
                <h3 class="title-block">Select exams available for <b>{{ $subject->name }}.</b></h3>
                <div class="header-options">
                    {{  $subjectExams->links() }}
                </div>
            </div>

            <div class="row">

                <div class="box">

                    <div class="row exam-list" data-equalizer data-equalize-on="small" id="test-eq">

                        <!-- loop on subject's exam and take 4 -->
                        @foreach($subjectExams->chunk(4) as $set)

                            <div class="exam-chunk-divider clearfix">

                                <!-- loop again on the 4 taken exams from above loop -->
                                <!-- so that we can enclose this 4 exams in another div for layout purposes -->
                                @foreach($set as $exam)

                                    <div class="exam-block medium-6 large-3 columns text-center" data-equalizer-watch>
                                        {{--<span class="label exam-counter">{{ $exam->id }}</span>--}}
                                        <img src="{{ URL::asset('img/exam2.svg') }}">
                                        <h3 class="exam-name">{{ $exam->name }}</h3>
                                        <p class="exam-desc">{{ $exam->description }}</p>
                                        <a class="button exam-btn"
                                           href="{{ route('exam-details', [$subject->id, $exam->id]) }}">View this exam
                                            <i class="step fi-arrow-right size-20"></i>
                                        </a>
                                    </div>

                                @endforeach

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        @else

            <div class="row column no-exam-available">
                <h4>Sorry no exam available for <b>{{ $subject->name }}.</b></h4>
            </div>

        @endif

    </div>

@endsection