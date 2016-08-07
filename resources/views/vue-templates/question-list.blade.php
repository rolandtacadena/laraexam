<template id="question-list-template">
    <table class="questions-for-exam">
        <thead>
        <tr>
            <th>Question</th>
            <th>Choice 1</th>
            <th>Choice 2</th>
            <th>Choice 3</th>
            <th>Choice 4</th>
            <th>Answer</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="question in list">
            <td><a v-on:click="loadQuestionOnForm( question.id )" data-open="updateQuestionModal">@{{ question.question }}</a></td>
            <td><a v-on:click="loadQuestionOnForm( question.id )" data-open="updateQuestionModal">@{{ question.choice1 }}</a></td>
            <td><a v-on:click="loadQuestionOnForm( question.id )" data-open="updateQuestionModal">@{{ question.choice2 }}</a></td>
            <td><a v-on:click="loadQuestionOnForm( question.id )" data-open="updateQuestionModal">@{{ question.choice3 }}</a></td>
            <td><a v-on:click="loadQuestionOnForm( question.id )" data-open="updateQuestionModal">@{{ question.choice4 }}</a></td>
            <td><a v-on:click="loadQuestionOnForm( question.id )" data-open="updateQuestionModal">@{{ question.answer }}</a></td>
        </tr>
        </tbody>
    </table>

    <div class="small reveal" id="updateQuestionModal" data-reveal>
        <form action="{{ route('teacher-update-question') }}" method="POST">

            {!! method_field('patch') !!}

            {{ csrf_field() }}

            <input type="hidden" name="exam_id" value="@{{ exam.id }}"/>
            <input type="hidden" name="question_id" value="@{{ question.id }}"/>

            <div class="row">
                <div class="medium-12 columns">
                    <h4><b>Update question</b></h4>
                </div>
                <div class="medium-12 columns">
                    <label>Question
                        <input type="text" name="question" value="@{{ question.question }}" placeholder="subject name">
                    </label>
                </div>
                <div class="medium-12 columns">
                    <label>Choice 1
                        <input type="text" name="choice1" value="@{{ question.choice1 }}" placeholder="subject name">
                    </label>
                </div>
                <div class="medium-12 columns">
                    <label>Choice 2
                        <input type="text" name="choice2" value="@{{ question.choice2 }}" placeholder="subject name">
                    </label>
                </div>
                <div class="medium-12 columns">
                    <label>Choice 3
                        <input type="text" name="choice3" value="@{{ question.choice3 }}" placeholder="subject name">
                    </label>
                </div>
                <div class="medium-12 columns">
                    <label>Choice 4
                        <input type="text" name="choice4" value="@{{ question.choice4 }}" placeholder="subject name">
                    </label>
                </div>
                <div class="medium-12 columns">
                   <p>Answer: <b>@{{ question.answer }}</b></p>
                </div>
                <div class="medium-12 columns">
                    <label>Chenge answer to:
                        <select name="answer">
                            <option value="@{{ question.choice1 }}">Choice 1</option>
                            <option value="@{{ question.choice2 }}">Choice 2</option>
                            <option value="@{{ question.choice3 }}">Choice 3</option>
                            <option value="@{{ question.choice4 }}">Choice 4</option>
                        </select>
                    </label>
                </div>
                <div class="medium-12 columns">
                    <button class="button exam-btn" type="submit">Update</button>
                </div>
            </div>
        </form>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

</template>