<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'PagesController@index')
    ->name('index');

Route::group(['middleware' => 'auth'], function () {

    Route::get('subject-exams/{subject}', 'SubjectsController@exams')
        ->name('subject-exams');

    Route::get('exam/{exam}', 'ExamsController@show')
        ->name('exam-details');

    Route::get('exam/{exam}/start', 'ExamsController@start')
        ->name('exam-start');

    Route::post('exam-process', 'ExamsController@process')
        ->name('exam-process');

    Route::get('exam-results', 'ExamsController@all_results');

    Route::get('exam-result/exam-{exam}/user-{user}', 'ExamsController@result')
        ->name('exam-result');

});


