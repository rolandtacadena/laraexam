@extends('layouts.app')

@section('page.title')
    Teacher Questions
@endsection

@section('content')

    <div class="general-container">
        <div class="row column expanded teacher-dashboard">

            @include('layouts.partials.navs.teacher-nav')

            <div class="small-12 medium-9 large-10 columns">
                <div class="teacher-dashboard-content">
                    <div class="row">
                        <h4>Questions</h4>
                        <hr>
                        <!-- list all exams of the Teacher -->
                        <div class="small-12 medium-6 large-4 column">
                            <label><b>Select Subject to view:</b>
                                <select id="subject-id-value"
                                v-model="selectedSubject"
                                v-on:change="loadExamsForSelectedSubject">
                                    @foreach($subjects as $subjectKey => $subjectValue)
                                        <option value="{{ $subjectValue }}">{{ $subjectKey }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <!-- load exams if the subject selected has exams -->
                        <div v-if="examCount" class="small-12 medium-6 large-4 column">
                            <label><b>Select Exam to view:</b>
                                <select
                                v-model="selectedExam"
                                v-on:change="loadQuestionsForSelectedExam">
                                    <option v-for="exam in exams" value="@{{ exam.id }}">@{{ exam.name }}</option>
                                </select>
                            </label>
                        </div>

                        <!-- messaging -->
                        <div class="small-12 medium-12 large-12 column">
                            <p>@{{ message }}</p>
                        </div>


                        <!-- Load search results if the selected
                        subject has exams and the selected exam has questions -->
                        <div v-if="examCount && questionsCount" class="small-12 columns teacher-search-results">

                            <h4 class="centered-title">Search Results: @{{ questionsCount }} questions</h4>

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
                                <tr v-for="question in questions">
                                    <td><a data-open="updateQuestionModal">@{{ question.question }}</a></td>
                                    <td><a data-open="updateQuestionModal">@{{ question.choice1 }}</a></td>
                                    <td><a data-open="updateQuestionModal">@{{ question.choice2 }}</a></td>
                                    <td><a data-open="updateQuestionModal">@{{ question.choice3 }}</a></td>
                                    <td><a data-open="updateQuestionModal">@{{ question.choice4 }}</a></td>
                                    <td><a data-open="updateQuestionModal">@{{ question.answer }}</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('additional-footer-scripts')

    <script>
        var baseRoute = '{{ route('index') }}'

        new Vue({
            el: 'body',
            data: {
                selectedSubject: '',
                selectedExam: '',
                exams: '',
                questions: '',
                examCount: '',
                questionsCount: '',
                message: 'Please select subject to load exams.'
            },
            methods: {
                loadExamsForSelectedSubject: function(){
                    var resource = this.$resource(baseRoute + '/teacher/ajax/subject-exams{/subject}');
                    resource.get({ subject: this.selectedSubject})
                    .then(function(response) {
                        this.exams = response.data;
                        this.examCount = this.exams.length;
                        if(this.examCount > 0) {
                            this.message = 'Please select a exam.';
                        } else {
                            this.message = 'No exams available for this subject. Please select another.';
                        }
                    });
                },
                loadQuestionsForSelectedExam: function () {
                    var resource = this.$resource(baseRoute + '/teacher/ajax/exam-questions{/exam}');
                    resource.get({ exam: this.selectedExam})
                    .then(function(response) {
                        this.questions = response.data;
                        this.questionsCount = this.questions.length;
                        if(this.questionsCount > 0) {
                            this.message = 'Please see results.';
                        } else {
                            this.message = 'No questions for this subject. Please select another.';
                        }
                    });
                }
            }
        });
    </script>
@endsection