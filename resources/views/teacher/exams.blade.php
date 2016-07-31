@extends('layouts.app')

@section('page.title')
    Teacher Exams
@endsection

@section('content')

    <div class="general-container">
        <div class="row column expanded teacher-dashboard">

            @include('layouts.partials.navs.teacher-nav')

            <div class="small-12 medium-10 large-10 columns">
                <div class="teacher-dashboard-content">
                    <div class="row">
                        <label><b>Select Subject to view:</b>
                            <select id="subject-id-value"
                                    v-model="selectedSubject"
                                    v-on:change="loadExamsForSelectedSubject"
                            >

                                @foreach($subjects as $subjectKey => $subjectValue)
                                    <option value="{{ $subjectValue }}">{{ $subjectKey }}</option>
                                @endforeach

                            </select>
                        </label>

                        <!-- show message when there is/are results -->
                        <h4 v-if="exams.length" class="centered-title">Search Results: @{{ examCount }} exams</h4>

                        <span v-if="!exams.length">No exams available.</span>

                        <!-- loop the exams object -->
                        <div v-for="exam in exams"
                             class="small-12 medium-3 large-2 columns text-center"
                                >
                            <img src="{{ URL::asset('img/exam2.svg') }}">
                            <h5 class="feature-block-header">
                                <a href="{{ route('index') }}/teacher/dashboard/exam-@{{ exam.id }}">@{{ exam.name }}</a>
                            </h5>
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
                exams: '',
                examCount: ''
            },
            methods: {
                loadExamsForSelectedSubject: function(){
                    var resource = this.$resource(baseRoute + '/teacher/ajax/subject-exams{/subject}');
                    resource.get({ subject: this.selectedSubject})
                    .then(function(response) {
                        this.exams = response.data;
                        this.examCount = this.exams.length;
                        console.log(this.exams);
                    });
                }
            }
        });
    </script>
@endsection