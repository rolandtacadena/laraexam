@extends('layouts.app')

@section('content')

    <div class="general-header row">
        <h4><b>{{ $exam->name }}</b></h4>
    </div>
    <hr/>
    <div class="row student-exam-form">

        @if(count($questions) > 0)

        <form method="POST" action="{{ route('exam-process') }}">
            {{ csrf_field() }}
            <input type="hidden" name="exam" value="{{ $exam->id }}"/>

            @foreach($questions as $question)

                <fieldset class="large-12 columns">
                    <legend class="question-title">{{ $question->question }}</legend>

                    <input type="radio"
                           name="question[{{ $question->id }}]"
                           value="{{ $question->choice1 }}"
                           id="choice1-{{ $question->choice1 }}"
                           required checked>
                    <label for="choice1-{{ $question->choice1 }}">{{ ucfirst($question->choice1) }}</label>

                    <input type="radio"
                           name="question[{{ $question->id }}]"
                           value="{{ $question->choice2 }}"
                           id="choice2-{{ $question->choice2 }}"
                           required>
                    <label for="choice2-{{ $question->choice2 }}">{{ ucfirst($question->choice2) }}</label>

                    <input type="radio"
                           name="question[{{ $question->id }}]"
                           value="{{ $question->choice3 }}"
                           id="choice3-{{ $question->choice3 }}"
                           required>
                    <label for="choice3-{{ $question->choice3 }}">{{ ucfirst($question->choice3) }}</label>

                    <input type="radio"
                           name="question[{{ $question->id }}]"
                           value="{{ $question->choice4 }}"
                           id="choice4-{{ $question->choice4 }}"
                           required>
                    <label for="choice4-{{ $question->choice4 }}">{{ ucfirst($question->choice4) }}</label>

                </fieldset>
                <hr/>

            @endforeach

            <fieldset class="large-12 columns">
                <input type="submit" class="exam-submit" value="Submit My Answers"/>
                <a href="" class="exam-cancel" value="Cancel"/>Cancel</a>
            </fieldset>
        </form>

        @else

            <p>No questions available</p>

        @endif
    </div>

@endsection