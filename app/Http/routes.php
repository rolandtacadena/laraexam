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

use Illuminate\Support\Facades\Route;

Route::auth();

Route::get('/', 'PagesController@index')
    ->name('index');

Route::group(['middleware' => 'auth'], function () {

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

});

Route::group(['middleware' => ['web']], function () {
    //Login Routes...
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
    Route::post('/admin/login','AdminAuth\AuthController@login');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');

    // Registration Routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');

    Route::get('/admin', 'AdminController@index');
});
