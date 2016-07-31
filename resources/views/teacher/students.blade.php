@extends('layouts.app')

@section('page.title')
    Teacher Students
@endsection

@section('content')

    <div class="general-container">
        <div class="row column expanded teacher-dashboard">

            @include('layouts.partials.navs.teacher-nav')

            <div class="small-12 medium-10 large-10 columns">
                <div class="teacher-dashboard-content">
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
            </div>
        </div>
    </div

@endsection