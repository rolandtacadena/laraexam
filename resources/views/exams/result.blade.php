@extends('layouts.app')

@section('content')

    <div class="general-header row">
        <h4>Exam Summary Results for exam <b>{{ $exam->name }}</b></h4>
        <a href="{{ route('index') }}" class="header-options">Take Another Exam</a>
    </div>
    <hr/>
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

                @foreach($results as $result)

                    <tr>
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->question }}</td>
                        <td>{{ $result->user_answer }}r</td>
                        <td>{{ $result->correct_answer }}</td>
                        <td class="text-center">
                            {!! $result->remarks == 0 ?
                            '<i class="step fi-x size-20"></i>' :
                            '<i class="step fi-check size-20"></i>' !!}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <hr/>


    </div>

@endsection