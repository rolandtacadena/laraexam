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

    Route::group(['prefix' => 'user', 'as' => 'user-'], function() {
        Route::get('{user}/profile', 'UsersController@profile')
            ->name('profile');

        Route::get('{user}/dashboard', 'UsersController@dashboard')
            ->name('dashboard');

        Route::get('{user}/settings', 'UsersController@settings')
            ->name('settings');
    });

    Route::get('exam-result/exam-{exam}/user-{user}', 'ExamsController@result')
        ->name('exam-result');

});

Route::group(['middleware' => ['web'], 'prefix' => 'teacher', 'as' => 'teacher-'], function () {

    //Teacher Login Routes...
    Route::get('login','TeacherAuth\AuthController@showLoginForm')
        ->name('login');
    Route::post('login','TeacherAuth\AuthController@login')
        ->name('postLogin');
    Route::get('logout','TeacherAuth\AuthController@logout')
        ->name('logout');

    // Teacher Registration Routes...
    Route::get('register', 'TeacherAuth\AuthController@showRegistrationForm')
        ->name('register');
    Route::post('register', 'TeacherAuth\AuthController@register')
        ->name('postRegister');

    // Teacher Routes
    // Routes related to subjects tab in dashboard
    Route::get('dashboard/subjects', 'TeachersController@subjects')
        ->name('subjects');

    Route::post('dashboard/subjects', 'TeachersController@create_subject')
        ->name('create-subject');

    Route::patch('dashboard/subjects/update', 'TeachersController@update_subject')
        ->name('update-subject');

    Route::get('dashboard/subjects/{subject}', 'TeachersController@view_subject')
        ->name('view-subject');

    Route::get('dashboard/exam-{exam}', 'TeachersController@view_exam')
        ->name('view-exam');

    Route::post('dashboard/exams', 'TeachersController@create_exam')
        ->name('create-exam');

    Route::patch('dashboard/exams/update', 'TeachersController@update_exam')
        ->name('update-exam');

    Route::post('dashboard/questions/', 'TeachersController@create_question')
        ->name('create-question');

    // AJAX Routes
    Route::get('ajax/subject/{subject}', 'TeachersController@return_subject_by_id');

    // Routes related to exams tab in dashboard
    Route::get('dashboard/subjects/exams', 'TeachersController@exams')
        ->name('exams');

    // Routes related to exams tab in dashboard
    Route::get('dashboard/questions', 'TeachersController@questions')
        ->name('questions');

    // Routes related to exams tab in dashboard
    Route::get('dashboard/students', 'TeachersController@students')
        ->name('students');

});

Route::get('subject/{subject}', 'TeachersController@return_subject_by_id');