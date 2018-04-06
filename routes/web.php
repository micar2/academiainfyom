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

Route::get('/', function () {
  return redirect('welcome');
});

Route::get('welcome', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('users', 'Auth\LoginController@showLoginForm')->name('login');

Route::group(['prefix'=>'admin',
    'middleware'=>'auth'],
    function (){




        Route::get('/', 'HomeController@index');




        Route::resource('posts', 'PostsController');







        Route::resource('categories', 'CategoriesController');

        Route::resource('lessons', 'LessonsController');

        Route::resource('subjects', 'SubjectController');

        Route::resource('comentaries', 'ComentaryController');

        Route::resource('documents', 'DocumentController');

        Route::resource('enrolments', 'EnrolmentController');
    });
