@extends('layouts.app')

@section('content')

    <div class="row column expanded teacher-dashboard">

        @include('teacher.teacher-nav')

        <div class="small-12 medium-10 large-10 columns">
            <div class="tabs-content vertical user-exam-history" data-tabs-content="example-vert-tabs">
                <div class="tabs-panel is-active" id="panel1v">
                    <h4>Subjects</h4>
                    <div class="dashboard-ops">
                        <button data-open="NewSubjectModal">+ Add New Subject</button>
                    </div>

                    <div class="row">

                        @foreach($teacher->subjects->chunk(3) as $set)

                            <div>

                                @foreach($set as $adminSubject)

                                    <div class="small-12 medium-6 large-3 columns text-center">
                                        <img src="{{ URL::asset('img/exam2.svg') }}">
                                        <h5 class="feature-block-header">{{ $adminSubject->name }}</h5>
                                    </div>


                                @endforeach

                            </div>

                        @endforeach

                    </div>

                </div>
                <div class="tabs-panel" id="panel2v">
                    <h4>Exams</h4>

                </div>
                <div class="tabs-panel" id="panel3v">
                    <h4>Questions</h4>

                </div><div class="tabs-panel" id="panel4v">
                    <h4>Students</h4>

                </div>
            </div>
        </div>
    </div>

@endsection