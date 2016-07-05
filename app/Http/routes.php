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

Route::get('how-it-works', 'PagesController@how_it_works')
    ->name('how-it-works');

Route::group(['middleware' => 'auth'], function () {

    Route::get('subjects', 'SubjectsController@all')
        ->name('subjects-all');

    Route::get('subject-exams/subject-{subject}', 'SubjectsController@exams')
        ->name('subject-exams');

    Route::get('subject-exams/subject-{subject}/exam-{exam}', 'ExamsController@show')
        ->name('exam-details');

    Route::get('exam/{exam}/start', 'ExamsController@start')
        ->name('exam-start');

    Route::post('exam-process', 'ExamsController@process')
        ->name('exam-process');

    Route::get('exam-results', 'ExamsController@all_results')
        ->name('exam_results');

    Route::get('exam-result/exam-{exam}/user-{user}', 'ExamsController@result')
        ->name('exam-result');

    Route::get('user/{user}/profile', 'UsersController@profile')
        ->name('user-profile');

    Route::get('user/{user}/dashboard', 'UsersController@dashboard')
        ->name('user-dashboard');

    Route::get('user/{user}/settings', 'UsersController@settings')
        ->name('user-settings');

});

Route::group(['middleware' => ['web']], function () {

    //Teacher Login Routes...
    Route::get('/teacher/login','TeacherAuth\AuthController@showLoginForm');
    Route::post('/teacher/login','TeacherAuth\AuthController@login');
    Route::get('/teacher/logout','TeacherAuth\AuthController@logout');

    // Teacher Registration Routes...
    Route::get('teacher/register', 'TeacherAuth\AuthController@showRegistrationForm');
    Route::post('teacher/register', 'TeacherAuth\AuthController@register');

    // Teacher Routes
    Route::get('teacher', 'TeachersController@index')
        ->name('teacher-dashboard');

});
