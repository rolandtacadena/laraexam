@extends('layouts.app')

@section('content')

    <div class="general-container">
        <div class="row column expanded teacher-dashboard">

            @include('teacher.teacher-nav')

            <div class="small-12 medium-10 large-10 columns">
                <div class="teacher-dashboard-content">
                    <h4>Exam List</h4>
                    <div class="dashboard-ops"><button data-open="NewExamModal">+ Add New Exam</button></div>
                    <div class="row">

                        @if($teacher->subjects->count() > 0)

                            @foreach($teacher->subjects as $subject)

                                <div class="subject-exams">
                                    <div class="small-12"><h4>{{ $subject->name }}</h4></div>

                                    @if($subject->exams->count() > 0)

                                        @foreach($subject->exams as $exam)

                                            <div class="small-12 medium-3 large-2 columns text-center">
                                                <img src="{{ URL::asset('img/exam2.svg') }}">
                                                <h5 class="feature-block-header" style="font-size: 15px;">{{ $exam->name }}</h5>
                                            </div>

                                        @endforeach

                                    @else<h5>No exams available for this subject</h5>@endif

                                </div>
                                <hr/>
                            @endforeach

                        @else<h5>No exams available</h5>@endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NewSubjectModal modal -->
    @include('teacher.forms.create-exam-modal')

@endsection