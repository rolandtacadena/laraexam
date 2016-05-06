@extends('layouts.app')

@section('content')

    <div class="row expanded teacher-panel">

        <!-- right column -->
        <div class="medium-9 large-10 medium-push-3 large-push-2 columns">

            <a href="#teacher-menu" class="small secondary expanded button hide-for-medium">Jump to Nav</a>

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


        </div>

        <!-- left column -->
        @include('dummy.teacher-actions')

    </div>

@endsection
