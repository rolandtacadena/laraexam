@extends('layouts.app')

@section('content')

    <div class="row expanded teacher-panel">

        <!-- right column -->
        <div class="medium-9 large-10 medium-push-3 large-push-2 columns">
            <a href="#teacher-menu" class="small secondary expanded button hide-for-medium">Jump to Nav</a>
            <div class="teacher-panel-right-col-header">
                <h2 class="teacher-panel-right-col-header">Subject List</h2>
                <a data-open="create-subject-modal" class="button add-subj">+ Add Subject</a>
            </div>
            <hr/>
            <div class="exam-list">
                <div class="row vertical-feature-block">
                    <div class="exam-container container-hover medium-3 large-3 columns">
                        <img class="exam-logo" src="img/exam.svg">
                        <h3 class="feature-block-header">PHP</h3>
                        <ul class="sub-details">
                            <li>Exam count: <span class="secondary right badge">2</span></li>
                            <li>Student count: <span class="secondary badge">2</span></li>
                            <li>Student completed: <span class="secondary badge">2</span></li>
                        </ul>
                        <ul class="vertical menu" data-accordion-menu>
                            <li>
                                <a href="#">Subject's Exams</a>
                                <ul class="menu vertical nested subj-exam">
                                    <li><a href="{{ url('teacher-sample-exam') }}">Item 1A</a></li>
                                    <li><a href="{{ url('teacher-sample-exam') }}">Item 1B</a></li>
                                    <li><a href="{{ url('teacher-sample-exam') }}">Item 1A</a></li>
                                    <li><a href="{{ url('teacher-sample-exam') }}">Item 1B</a></li>
                                    <li><a href="{{ url('teacher-sample-exam') }}">Item 1A</a></li>
                                    <li><a href="{{ url('teacher-sample-exam') }}">Item 1B</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="exam-container container-hover medium-3 large-3 columns">
                        <img class="exam-logo" src="img/exam.svg">
                        <h3 class="feature-block-header">MySQL</h3>
                        <ul class="sub-details">
                            <li>Exam count: <span class="secondary right badge">2</span></li>
                            <li>Student count: <span class="secondary badge">2</span></li>
                            <li>Student completed: <span class="secondary badge">2</span></li>
                        </ul>
                        <ul class="vertical menu" data-accordion-menu>
                            <li>
                                <a href="#">Subject's Exams</a>
                                <ul class="menu vertical nested subj-exam">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="exam-container container-hover medium-3 large-3 columns">
                        <img class="exam-logo" src="img/exam.svg">
                        <h3 class="feature-block-header">Javascript</h3>
                        <ul class="sub-details">
                            <li>Exam count: <span class="secondary right badge">2</span></li>
                            <li>Student count: <span class="secondary badge">2</span></li>
                            <li>Student completed: <span class="secondary badge">2</span></li>
                        </ul>
                        <ul class="vertical menu" data-accordion-menu>
                            <li>
                                <a href="#">Subject's Exams</a>
                                <ul class="menu vertical nested subj-exam">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="exam-container container-hover medium-3 large-3 columns">
                        <img class="exam-logo" src="img/exam.svg">
                        <h3 class="feature-block-header">CSS</h3>
                        <ul class="sub-details">
                            <li>Exam count: <span class="secondary right badge">2</span></li>
                            <li>Student count: <span class="secondary badge">2</span></li>
                            <li>Student completed: <span class="secondary badge">2</span></li>
                        </ul>
                        <ul class="vertical menu" data-accordion-menu>
                            <li>
                                <a href="#">Subject's Exams</a>
                                <ul class="menu vertical nested subj-exam">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="exam-container container-hover medium-3 large-3 columns">
                        <img class="exam-logo" src="img/exam.svg">
                        <h3 class="feature-block-header">Laravel</h3>
                        <ul class="sub-details">
                            <li>Exam count: <span class="secondary right badge">2</span></li>
                            <li>Student count: <span class="secondary badge">2</span></li>
                            <li>Student completed: <span class="secondary badge">2</span></li>
                        </ul>
                        <ul class="vertical menu" data-accordion-menu>
                            <li>
                                <a href="#">Subject's Exams</a>
                                <ul class="menu vertical nested subj-exam">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="exam-container container-hover medium-3 large-3 columns">
                        <img class="exam-logo" src="img/exam.svg">
                        <h3 class="feature-block-header">Vue Js</h3>
                        <ul class="sub-details">
                            <li>Exam count: <span class="secondary right badge">2</span></li>
                            <li>Student count: <span class="secondary badge">2</span></li>
                            <li>Student completed: <span class="secondary badge">2</span></li>
                        </ul>
                        <ul class="vertical menu" data-accordion-menu>
                            <li>
                                <a href="#">Subject's Exams</a>
                                <ul class="menu vertical nested subj-exam">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="exam-container container-hover medium-3 large-3 columns">
                        <img class="exam-logo" src="img/exam.svg">
                        <h3 class="feature-block-header">React Js</h3>
                        <ul class="sub-details">
                            <li>Exam count: <span class="secondary right badge">2</span></li>
                            <li>Student count: <span class="secondary badge">2</span></li>
                            <li>Student completed: <span class="secondary badge">2</span></li>
                        </ul>
                        <ul class="vertical menu" data-accordion-menu>
                            <li>
                                <a href="#">Subject's Exams</a>
                                <ul class="menu vertical nested subj-exam">
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                    <li><a href="#">Item 1A</a></li>
                                    <li><a href="#">Item 1B</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

        <!-- left column -->
        @include('dummy.teacher-actions')

        <div class="reveal" id="create-subject-modal" data-reveal>

            <div class="teacher-panel-right-col-header">
                <h2 class="teacher-panel-right-col-header">Create Subject</h2>
            </div>

            <hr/>

            <form>
                <div class="row">
                    <div class="medium-3 columns">
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns">
                        </label>
                    </div>
                    <div class="medium-3 columns">
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns">
                        </label>
                    </div>
                    <div class="medium-3 columns">
                        <label>Select Menu
                            <select>
                                <option value="husker">Husker</option>
                                <option value="starbuck">Starbuck</option>
                                <option value="hotdog">Hot Dog</option>
                                <option value="apollo">Apollo</option>
                            </select>
                        </label>
                    </div>
                    <div class="medium-3 columns">
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <fieldset class="large-6 columns">
                        <legend>Choose Your Favorite</legend>
                        <input type="radio" name="pokemon" value="Red" id="pokemonRed" required><label for="pokemonRed">Red</label>
                        <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
                        <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label>
                    </fieldset>
                    <fieldset class="large-6 columns">
                        <legend>Check these out</legend>
                        <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
                        <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
                        <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
                    </fieldset>
                </div>
                <div class="row">
                    <div class="medium-4 columns">
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns">
                        </label>
                    </div>
                    <div class="medium-4 columns">
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns">
                        </label>
                    </div>
                    <div class="medium-4 columns">
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns">
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns">
                        </label>
                    </div>
                    <div class="medium-6 columns">
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns">
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns">
                        </label>
                    </div>
                    <div class="medium-6 columns">
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns">
                        <input type="submit" class="button"/>
                    </div>
                </div>
            </form>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </div>
    
@endsection
