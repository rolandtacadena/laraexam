@extends('layouts.app')

@section('content')

    <div class="general-container">

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

                                    <div class="small-12 medium-3 large-2 columns text-center">
                                        <img src="{{ URL::asset('img/exam2.svg') }}">
                                        <h5 class="feature-block-header">
                                            <a href="{{ route('teacher-view-subject', $teacherSubject) }}">{{ $teacherSubject->name }}</a>
                                        </h5>
                                    </div>

                                @endforeach

                            </div>

                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('teacher.forms.create-subject-modal')

@endsection