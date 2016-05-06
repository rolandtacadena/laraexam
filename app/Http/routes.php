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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'HomeController@home');

// dummy routes for widgetization
Route::get('/teacher-exams', function() {
    return view('dummy.teacher-exams');
});

Route::get('/teacher-students', function() {
    return view('dummy.teacher-students');
});

Route::get('/teacher-reports', function() {
    return view('dummy.teacher-reports');
});

Route::get('/teacher-settings', function() {
    return view('dummy.teacher-settings');
});

Route::get('/teacher-create-student', function() {
    return view('dummy.teacher-create-student');
});

Route::get('/teacher-create-subject', function() {
    return view('dummy.teacher-create-subject');
});

Route::get('/teacher-sample-exam', function() {
    return view('dummy.teacher-sample-exam');
});

// student
Route::get('/student-exam', function() {
    return view('dummy.student-exam');
});

Route::get('/student', function() {
    return view('dummy.student');
});

//Route::get('/home', 'HomeController@index');
