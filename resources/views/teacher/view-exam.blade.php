@extends('layouts.app')

@section('content')
    <div class="general-container no-padding">
        <section class="subject-details">
            <div class="row">
                <div class="large-4 medium-4 columns">
                    <!-- temp subject photo -->
                    <img src="http://foundation.zurb.com/assets/img/smallbiz-footer.svg" alt="">
                </div>
                <div class="large-8 medium-8 columns banner-info">
                    <h3 class="light">{{ $exam->name }}</h3>
                    <p class="lead">{{ $exam->description }}</p>
                    <div class="course-buttons">
                        <a href="{{ route('teacher-view-subject', $exam->subject->id) }}" class="exam-btn button">Back to Subject List</a>
                        <button data-open="NewQuestionModal" class="exam-btn button">+ Create questions for this exam</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="teacher-dashboard-content">
            <div class="row">
                @if($exam->questionCount() > 0)
                    <h4 class="text-center">Questions for this Exam</h4>
                    <br/>
                    <table>
                        <thead>
                        <tr>
                            <th>Question</th>
                            <th>Choice 1</th>
                            <th>Choice 2</th>
                            <th>Choice 3</th>
                            <th>Choice 4</th>
                            <th>Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($exam->questions as $question)
                            <tr>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->choice1 }}</td>
                                <td>{{ $question->choice2 }}</td>
                                <td>{{ $question->choice3 }}</td>
                                <td>{{ $question->choice4 }}</td>
                                <td>{{ $question->answer }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                @else
                    <div class="row">
                        <p>No questions available</p>
                        <a data-open="NewQuestionModal">+ Create Question for this subject</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('teacher.forms.create-question-modal')
@endsection