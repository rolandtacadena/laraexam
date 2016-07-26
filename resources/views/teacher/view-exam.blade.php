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
                    <img src="http://foundation.zurb.com/assets/img/smallbiz-footer.svg" alt="">
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
                        <table class="questions-for-exam">
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
                                    <td><a v-on:click="loadQuestionOnForm({{ $question->id }})" data-open="updateQuestionModal">{{ $question->question }}</a></td>
                                    <td><a v-on:click="loadQuestionOnForm({{ $question->id }})" data-open="updateQuestionModal">{{ $question->choice1 }}</a></td>
                                    <td><a v-on:click="loadQuestionOnForm({{ $question->id }})" data-open="updateQuestionModal">{{ $question->choice2 }}</a></td>
                                    <td><a v-on:click="loadQuestionOnForm({{ $question->id }})" data-open="updateQuestionModal">{{ $question->choice3 }}</a></td>
                                    <td><a v-on:click="loadQuestionOnForm({{ $question->id }})" data-open="updateQuestionModal">{{ $question->choice4 }}</a></td>
                                    <td><a v-on:click="loadQuestionOnForm({{ $question->id }})" data-open="updateQuestionModal">{{ $question->answer }}</a></td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
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

    <question-update-modal question="question"></question-update-modal>

    <!-- update Exam Modal -->
    @include('teacher.forms.update-exam-modal')

    @include('teacher.forms.create-question-modal')

@endsection

@section('additional-footer-scripts')

    <template id="question-update-modal-template">
        <div class="small reveal" id="updateQuestionModal" data-reveal>
            <form action="{{ route('teacher-update-question') }}" method="POST">

                {!! method_field('patch') !!}

                {{ csrf_field() }}

                <input type="hidden" name="exam_id" value="{{ $exam->id }}"/>
                <input type="hidden" name="question_id" value="@{{ question.id }}"/>

                <div class="row">
                    <div class="medium-12 columns">
                        <h4><b>Update question</b></h4>
                    </div>
                    <div class="medium-12 columns">
                        <label>Question
                            <input type="text" name="question" value="@{{ question.question }}" placeholder="subject name">
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Choice 1
                            <input type="text" name="choice1" value="@{{ question.choice1 }}" placeholder="subject name">
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Choice 2
                            <input type="text" name="choice2" value="@{{ question.choice2 }}" placeholder="subject name">
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Choice 3
                            <input type="text" name="choice3" value="@{{ question.choice3 }}" placeholder="subject name">
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Choice 4
                            <input type="text" name="choice4" value="@{{ question.choice4 }}" placeholder="subject name">
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <label>Answer
                            <select name="answer">
                                <option value="@{{ question.choice1 }}">Choice 1 - @{{ question.choice2 }}</option>
                                <option value="@{{ question.choice2 }}">Choice 2 - @{{ question.choice2 }}</option>
                                <option value="@{{ question.choice3 }}">Choice 3 - @{{ question.choice3 }}</option>
                                <option value="@{{ question.choice4 }}">Choice 4 - @{{ question.choice4 }}</option>
                            </select>
                        </label>
                    </div>
                    <div class="medium-12 columns">
                        <button class="button exam-btn" type="submit">Update</button>
                    </div>
                </div>
            </form>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </template>
    <script>

        var baseRoute = '{{ route('index') }}'
        new Vue({
            el: 'body',
            data: {
                question: {}
            },
            methods: {
                loadQuestionOnForm: function(question){
                    this.$broadcast('loadQuestionOnForm', question);
                }
            },
            components: {
                'question-update-modal': {
                    template: '#question-update-modal-template',
                    events: {
                        loadQuestionOnForm: function(question) {
                            this.loadQuestionOnForm(question);
                        }
                    },
                    props: ['question'],
                    methods: {
                        loadQuestionOnForm: function(question){
                            var resource = this.$resource(baseRoute + '/teacher/ajax/question{/question}');
                            resource.get({ question: question})
                                    .then(function(response) {
                                        this.question = response.data;
                                    });
                        },
                        refreshSubjectData: function() {
                            this.question = ""
                        }
                    }
                }
            }
        });
    </script>

@endsection