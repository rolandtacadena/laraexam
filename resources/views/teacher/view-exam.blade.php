@extends('layouts.app')

@section('page.title')
    Teacher Exam - {{ $exam->name }}
@endsection

@section('content')

    <div class="general-container no-padding">
        <section class="subject-details">
            <div class="row">
                <div class="large-4 medium-4 columns">
                    <!-- temp subject photo -->
                    <img src="{{ URL::asset('img/subj-exm.svg') }}">
                </div>
                <div class="large-8 medium-8 columns banner-info">
                    <h3 class="light">{{ $exam->name }}</h3>
                    <p class="lead">{{ $exam->description }}</p>
                    <div class="course-buttons">
                        <a href="{{ route('teacher-view-subject', $exam->subject->id) }}" class="exam-btn button">Back to Subject List</a>
                        <button data-open="NewQuestionModal" class="exam-btn button">+ Create questions for this exam</button>
                        <button data-open="updateExamModal" class="exam-btn button">Edit this Exam</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="teacher-dashboard-content">
            <div class="row">

                @if($exam->questionCount() > 0)

                    <br/>
                    <h4 class="centered-title">Questions for this Exam ( {{ $exam->questionCount()}} )</h4>
                    <br/>
                    <div class="box">

                        <!-- questionlist component -->
                        <question-list :list="{{ json_encode($exam->questions) }}"></question-list>

                    </div>

                @else

                    <div class="row">
                        <p>No questions available</p>
                        <a data-open="NewQuestionModal">+ Create Question for this subject</a>
                    </div>

                @endif

            </div>
        </div>
    </div>

    <!-- update Exam Modal -->
    @include('teacher.forms.update-exam-modal')

    @include('teacher.forms.create-question-modal')

@endsection

@section('additional-footer-scripts')

    @include('vue-templates.question-list')

    @include('vue-components.question-list')

    <script>
        new Vue({
            el: 'body'
        });
    </script>

@endsection