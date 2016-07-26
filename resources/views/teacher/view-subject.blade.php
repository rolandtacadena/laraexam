@extends('layouts.app')

@section('page.title')
    Teacher Subject - {{ $subject->name }}
@endsection

@section('content')

    <div class="general-container no-padding">
        <section class="subject-details">
            <div class="row">
                <div class="large-4 medium-4 columns">
                    <!-- temp subject photo -->
                    <img src="http://foundation.zurb.com/assets/img/smallbiz-footer.svg" alt="">
                </div>
                <div class="large-8 medium-8 columns banner-info">
                    <h3 class="light">{{ $subject->name }}</h3>
                    <p class="lead">{{ $subject->description }}</p>
                    <div class="course-buttons">
                        <a href="{{ route('teacher-subjects') }}" class="exam-btn button">Back to Dashboard</a>
                        <button data-open="NewExamModal" class="exam-btn button">+ Create Exam for this subject</button>
                        <button data-open="updateSubjectModal" class="exam-btn button">Edit this Subject</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="teacher-dashboard-content">
            <div class="row">

                @if($subject->examCount() > 0)

                    <h4 class="centered-title">Exams for this subject ( {{ $subject->examCount()}} )</h4>

                    @foreach($subject->exams()->latest()->chunk(3) as $set)

                        <div>

                            @foreach($set as $exam)

                                <div class="small-12 medium-3 large-2 columns text-center">
                                    <img src="{{ URL::asset('img/exam2.svg') }}">
                                    <h5 class="feature-block-header">
                                        <a href="{{ route('teacher-view-exam', $exam) }}">{{ $exam->name }}</a>
                                    </h5>
                                </div>

                            @endforeach

                        </div>

                    @endforeach

                @else

                    <div class="row">
                        <p>No subjects available</p>
                        <a data-open="NewExamModal">+ Create Exam for this subject</a>
                    </div>

                @endif

            </div>
        </div>
    </div>

    <!-- update Subject Modal -->
    @include('teacher.forms.update-subject-modal')

    @include('teacher.forms.create-exam-modal')

@endsection
