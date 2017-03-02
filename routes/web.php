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
    return view('pages.home');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/individual_courses', ['as'=>'individual_courses','uses'=>'CourseController@individual_course_view']);

// Route::get('auth/google', 'Auth\RegisterController@redirectToGoogle');
// Route::get('auth/google/callback', 'Auth\RegisterController@handleGoogleCallback');
Route::get('/profile', ['as'=>'profile', 'uses'=>'UsersController@profile']);
Route::post('/profile',['as'=>'profile','uses'=>'UsersController@profile_Update']);
Route::post('/password_update',['as'=>'password_update','uses'=>'UsersController@password_update']);
Route::get('/delete',['as'=>'delete','uses'=>'UsersController@delete']);
Route::get('/profile_picture',['as'=>'profile_picture','uses'=>'UsersController@profile_picture']);
Route::post('/profile_picture',['as'=>'profile_picture','uses'=>'UsersController@profile_picture_update']);



