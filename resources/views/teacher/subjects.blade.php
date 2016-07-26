@extends('layouts.app')

@section('page.title')
    Teacher Subjects
@endsection

@section('content')

    <div class="general-container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
        <div class="row column expanded teacher-dashboard">

            @include('teacher.teacher-nav')

            <div class="small-12 medium-10 large-10 columns">
                <div class="teacher-dashboard-content">
                    <h4>Subject List</h4>
                    <div class="dashboard-ops">
                        <button data-open="NewSubjectModal">+ Add New Subject</button>
                    </div>
                    <div class="row">

                        @foreach($teacher->subjects()->latest()->chunk(3) as $set)

                            <div>

                                @foreach($set as $teacherSubject)

                                    <div id="subject-block" class="small-12 medium-3 large-2 columns text-center">
                                        <img src="{{ URL::asset('img/exam2.svg') }}">
                                        <h5 class="feature-block-header">
                                            <a href="{{ route('teacher-view-subject', $teacherSubject) }}">{{ $teacherSubject->name }}</a>
                                        </h5>
                                        <a data-open="subjectDetailsModalComponent" v-on:click="quickSubjectDetails({{ $teacherSubject->id }})">Quick view</a>
                                    </div>

                                @endforeach

                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Subject Modal Component -->
    <subject-details-modal subject="subject"></subject-details-modal>

    @include('teacher.forms.create-subject-modal')

@endsection

@section('additional-footer-scripts')

    <template id="subject-details-modal-template">
        <div class="small reveal" id="subjectDetailsModalComponent" data-reveal>
            <h1>@{{ subject.name }}</h1>
            <p>@{{ subject.description }}</p>
            <a href="{{ route('index') }}/teacher/dashboard/subjects/@{{ subject.id }}">
                View more details for this subject
            </a>
            <button v-on:click="refreshSubjectData" class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </template>
    <script>

        var baseRoute = '{{ route('index') }}'
        new Vue({
           el: 'body',
            data: {
                subject: {}
            },
            methods: {
                quickSubjectDetails: function(subject){
                    this.$broadcast('quickSubjectDetails', subject);
                }
            },
            components: {
                'subject-details-modal': {
                    template: '#subject-details-modal-template',
                    events: {
                        quickSubjectDetails: function(subject) {
                            this.quickSubjectDetails(subject);
                        }
                    },
                    props: ['subject'],
                    methods: {
                        quickSubjectDetails: function(subject){
                            var resource = this.$resource(baseRoute + '/teacher/ajax/subject{/subject}');
                            resource.get({ subject: subject})
                            .then(function(response) {
                                this.subject = response.data;
                            });
                        },
                        refreshSubjectData: function() {
                            this.subject = ""
                        }
                    }
                }
            }
        });
    </script>

@endsection