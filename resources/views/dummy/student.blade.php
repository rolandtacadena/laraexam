@extends('layouts.app')

@section('content')

    <div class="row expanded student-panel">

        <!-- right column -->
        <div class="medium-9 large-10 medium-push-3 large-push-2 columns">

            <a href="#student-menu" class="small secondary expanded button hide-for-medium">Jump to Nav</a>

            <div class="student-panel-right-col-header">
                <h2 class="teacher-panel-right-col-header">Create Student</h2>
            </div>

            <hr/>



        </div>

        <!-- left column -->
        @include('dummy.student-actions')

    </div>

@endsection
