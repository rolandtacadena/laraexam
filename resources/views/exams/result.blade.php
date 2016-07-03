@extends('layouts.app')

@section('content')

    <div class="row column">
        <div class="row general-header">
            <h4 class="title-block">Exam Summary Results for exam <b>{{ $exam->name }}</b></h4>
            {{--<div class="header-options">--}}
                {{--<ul class="menu icon-top">--}}
                    {{--<li><a href="#"><i class="fi-list"></i> <span>One</span></a></li>--}}
                    {{--<li><a href="#"><i class="fi-list"></i> <span>Two</span></a></li>--}}
                    {{--<li><a href="#"><i class="fi-list"></i> <span>Three</span></a></li>--}}
                    {{--<li><a href="#"><i class="fi-list"></i> <span>Four</span></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>

        <div class="box correct-wrong-tally clearfix text-center">
            <div class="correct-container small-12 medium-6 columns">
                <h2>{{ $examScore->num_correct }}</h2>
                <p>Number of correct answers</p>
            </div>
            <div class="wrong-container small-12 medium-6 columns">
                <h2>{{ $examScore->num_wrong }}</h2>
                <p>Wrong answers</p>
            </div>
        </div>

        <div class="box clearfix">
            <div class="row exam-results">
                <table class="stack">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Question</th>
                        <th>You Answer</th>
                        <th>Correct Answer</th>
                        <th class="text-center">Remark</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($examSummary as $summary)

                        <tr>
                            <td>{{ $summary->id }}</td>
                            <td>{{ $summary->question }}</td>
                            <td>{{ $summary->user_answer }}</td>
                            <td>{{ $summary->correct_answer }}</td>
                            <td class="text-center">
                                {!! $summary->remarks == 0 ?
                                '<i class="step fi-x size-20"></i>' :
                                '<i class="step fi-check size-20"></i>' !!}
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection