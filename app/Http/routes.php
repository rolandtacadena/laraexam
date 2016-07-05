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

    //Admin Login Routes...
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');

    // Admin Registration Routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');

    // Admin Routes
    Route::get('admin', 'AdminsController@index')
        ->name('admin-dashboard');

});
