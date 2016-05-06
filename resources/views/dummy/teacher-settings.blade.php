@extends('layouts.app')

@section('content')

    <div class="row expanded teacher-panel">

        <!-- right column -->
        <div class="medium-9 large-10 medium-push-3 large-push-2 columns">
            <a href="#teacher-menu" class="small secondary expanded button hide-for-medium">Jump to Nav</a>

            <div class="teacher-panel-right-col-header">
                <h2 class="teacher-panel-right-col-header">Settings</h2>
                <a href="about.html" class="button add-subj">+ Add Student</a>
            </div>

            <hr/>


        </div>

        <!-- left column -->
        @include('dummy.teacher-actions')

    </div>

@endsection
