<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', 'WelcomeController@index')->name('welcome');

//Route::get('student.register', 'WelcomeController@register')->name('student.register');
//
//Route::get('student.create', 'WelcomeController@create')->name('student.create');
//
//Route::get('student.login', 'WelcomeController@login')->name('student.login');
//Route::post('student.intro', 'WelcomeController@intro')->name('student.intro');
//
//Route::get('student.store', 'WelcomeController@store')->name('student.store');
//
//Route::post('student.logout', 'Auth\LoginController@logout')->name('student.logout');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Auth::routes();

//Route::group(['prefix'=>'admin/',
//    'middleware'=>'auth'],
//    function (){

        Route::get('/', 'HomeController@index');

        Route::resource('posts', 'PostsController');

        Route::resource('categories', 'CategoriesController');

        Route::resource('lessons', 'LessonsController');

        Route::resource('subjects', 'SubjectController');

        Route::resource('comentaries', 'ComentaryController');

        Route::resource('documents', 'DocumentController');

        Route::resource('enrolments', 'EnrolmentController');
//    });
